<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $courses = Course::with(['user'])
            ->withCount('lessons')
            ->addSelect([
                'students_avg_rating' => DB::table('course_user')
                    ->selectRaw('AVG(rating)')
                    ->whereColumn('course_id', 'courses.id'),
                    
                'likes_count' => DB::table('course_user')
                    ->selectRaw('COUNT(*)')
                    ->whereColumn('course_id', 'courses.id')
                    ->where('vote', 1),
                    
                'dislikes_count' => DB::table('course_user')
                    ->selectRaw('COUNT(*)')
                    ->whereColumn('course_id', 'courses.id')
                    ->where('vote', -1),
            ])
            ->when(auth()->check(), function ($query) {
                $query->addSelect([
                    'user_rating' => DB::table('course_user')
                        ->select('rating')
                        ->whereColumn('course_id', 'courses.id')
                        ->where('user_id', auth()->id())
                        ->limit(1),
                        
                    'user_vote' => DB::table('course_user')
                        ->select('vote')
                        ->whereColumn('course_id', 'courses.id')
                        ->where('user_id', auth()->id())
                        ->limit(1),
                ]);
            })
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('courses.index', compact('courses', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => 'required|string|min:6|max:255|unique:courses,name',
            'image' => 'required|image|max:8192',
            'description' => 'required|string',
        ]);

        $slug = Course::generateUniqueSlug($request->name);

        $course = $user->courses()->create([
            'name' => $request->name,
            'slug' => $slug,
            'image_link' => 'url',
            'description' => $request->description,
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = "$course->id.$extension";
            
            $path = $image->storeAs(
                'courses', 
                $filename,
                'public'
            );
            
            $image_link = Storage::disk('public')->url($path);
            $course->update(['image_link' => $image_link]);
        }

        return redirect()->route('courses.show', $course->slug)->with('success', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $course = Course::with(['user', 'badges', 'lessons'])
            ->withCount('students')
            ->withAvg('students as students_avg_rating', 'course_user.rating')
            ->withCount([
                'students as likes_count' => function($query) {
                    $query->where('course_user.vote', 1);
                },
                'students as dislikes_count' => function($query) {
                    $query->where('course_user.vote', -1);
                }
            ])
            ->where('slug', $slug)
            ->firstOrFail();
        
        $course->is_enrolled = false;
        if (auth()->check()) {
            $course->is_enrolled = $course->students()
                ->where('user_id', auth()->id())
                ->exists();
        }

        if (auth()->check()) {
            $enrollment = $course->students()
                ->where('user_id', auth()->id())
                ->first();
                
            $course->user_rating = $enrollment ? $enrollment->pivot->rating : 0;
            $course->user_vote = $enrollment ? $enrollment->pivot->vote : 0;
        } else {
            $course->user_rating = 0;
            $course->user_vote = 0;
        }

        $relatedCourses = Course::inRandomOrder()
            ->where('id', '!=', $course->id)
            ->limit(5)
            ->get();

        return view('courses.show', compact('course', 'relatedCourses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();

        if (auth()->user()->id != $course->user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }

        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();

        if (auth()->user()->id != $course->user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }
        
        $validated = $request->validate([
            'name' => "filled|string|min:6|max:255|unique:courses,name,$course->id",
            'image' => 'sometimes|image|max:8192',
            'description' => 'filled|string',
        ]);

        if ($request->hasFile('image')) {
            if ($course->image_link) {
                $oldImagePath = str_replace(Storage::disk('public')->url(''), '', $course->image_link);
                Storage::disk('public')->delete($oldImagePath);
            }

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = "{$course->id}.{$extension}";
            
            $path = $image->storeAs(
                'courses', 
                $filename,
                'public'
            );
            
            $validated['image_link'] = Storage::disk('public')->url($path);
        }

        $course->update($validated);

        return redirect()->route('courses.show', $course->slug)->with('success', 'Course updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        if (auth()->user()->id != $course->user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }
        $course->delete();
        return redirect()->route('courses.index');
    }

    public function enroll(string $slug)
    {
        $user = auth()->user();
        $course = Course::where('slug', $slug)->firstOrFail();

        if ($user->enrolledCourses()->where('course_id', $course->id)->exists()) {
            return back()->with('error', 'You are already enrolled!');
        }

        $user->enrolledCourses()->attach($course->id);
        
        return back()->with('success', 'Enrolled successfully!');
    }

    public function vote(Request $request, string $slug)
    {
        $validated = $request->validate([
            'value' => 'required|integer|between:-1,1'
        ]);

        $user = auth()->user();
        $course = Course::where('slug', $slug)->firstOrFail();

        $user->enrolledCourses()->updateExistingPivot($course->id, [
            'vote' => $validated['value']
        ]);

        return back()->with('success', 'Vote updated!');
    }

    public function rate(Request $request, string $slug)
    {
        $validated = $request->validate([
            'value' => 'required|integer|between:1,5'
        ]);

        $user = auth()->user();
        $course = Course::where('slug', $slug)->firstOrFail();

        $user->enrolledCourses()->updateExistingPivot($course->id, [
            'rating' => $validated['value']
        ]);

        return back()->with('success', 'Rating updated!');
    }

    public function takeLesson(string $course_slug, string $slug)
    {
        $user = auth()->user();
        $course = Course::where('slug', $course_slug)->firstOrFail();
        $lesson = $course->lessons->where('slug', $slug)->firstOrFail();

        $user->lessons()->syncWithoutDetaching([$lesson->id]);
        return;
    }
}
