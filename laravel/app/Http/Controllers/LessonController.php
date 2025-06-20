<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $course_slug)
    {
        $course = Course::where('slug', $course_slug)->firstOrFail();
        if (!auth()->user()->isAdmin() && auth()->user()->id != $course->user->id) {
            abort(403, 'Unauthorized Action');
        }
        return view('lessons.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $course_slug)
    {
        $course = Course::where('slug', $course_slug)->firstOrFail();
        if (!auth()->user()->isAdmin() && auth()->user()->id != $course->user->id) {
            abort(403, 'Unauthorized Action');
        }

        $validated = $request->validate([
            'name' => 'required|string|min:6|max:255|unique:lessons,name',
            'description' => 'required|string',
            'image' => 'sometimes|image|max:8192',
            'content' => 'required|string',
        ]);

        $lesson = $course->lessons()->create([
            'name' => $request->name,
            'slug' => Lesson::generateUniqueSlug($request->name),
            'description' => $request->description,
            'content' => $request->content
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = "$lesson->id.$extension";
            
            $path = $image->storeAs(
                'courses/lessons', 
                $filename,
                'public'
            );
            
            $image_link = Storage::disk('public')->url($path);
            $lesson->update(['image_link' => $image_link]);
        }

        return redirect()->route('lessons.show', [$course->slug, $lesson->slug])->with('success', 'Lesson created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $course_slug, string $slug)
    {
        $course = Course::where('slug', $course_slug)->firstOrFail();
        $lesson = $course->lessons()->where('slug', $slug)->firstOrFail();

        if (auth()->check()) {
            $user = auth()->user();
            $isOwnerOrAdmin = $user->id == $course->user_id || $user->isAdmin();
            $isEnrolled = $user->enrolledCourses()->where('course_id', $course->id)->exists();

            if (!$isOwnerOrAdmin && !$isEnrolled) {
                abort(403, 'You must enroll in the course to view this lesson');
            }
        } else {
            abort(403, 'You must be logged in to view lessons');
        }

        $lesson->is_finished = false;
        if (auth()->check()) {
            $enrollment = $lesson->takenBy()
                ->where('user_id', auth()->id())
                ->first();
            $lesson->is_finished = $enrollment ? $enrollment->pivot->is_finished : false;
        }
        
        if (auth()->check()) {
            $enrollment = $lesson->takenBy()
                ->where('user_id', auth()->id())
                ->first();
                
            $lesson->user_rating = $enrollment ? $enrollment->pivot->rating : 0;
            $lesson->user_vote = $enrollment ? $enrollment->pivot->vote : 0;
        } else {
            $lesson->user_rating = 0;
            $lesson->user_vote = 0;
        }

        $relatedCourses = Course::inRandomOrder()
            ->where('id', '!=', $course->id)
            ->limit(5)
            ->get();

        return view('lessons.show', compact('course', 'lesson', 'relatedCourses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $course_slug, string $slug)
    {
        $course = Course::where('slug', $course_slug)->firstOrFail();
        if (auth()->user()->id != $course->user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }

        $lesson = $course->lessons()->where('slug', $slug)->firstOrFail();
        return view('lessons.edit', compact('course', 'lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $course_slug, string $slug)
    {
        $course = Course::where('slug', $course_slug)->firstOrFail();
        if (auth()->user()->id != $course->user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }

        $lesson = $course->lessons()->where('slug', $slug)->firstOrFail();
        $validated = $request->validate([
            'name' => "filled|string|min:6|max:255|unique:lessons,name,$lesson->id",
            'description' => 'filled|string',
            'image' => 'sometimes|image|max:8192',
            'content' => 'filled|string',
        ]);

        if ($request->hasFile('image')) {
            if ($lesson->image_link) {
                $oldImagePath = str_replace(Storage::disk('public')->url(''), '', $lesson->image_link);
                Storage::disk('public')->delete($oldImagePath);
            }

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = "{$lesson->id}.{$extension}";
            
            $path = $image->storeAs(
                'courses/lessons', 
                $filename,
                'public'
            );
            
            $validated['image_link'] = Storage::disk('public')->url($path);
        }

        $lesson->update($validated);

        return redirect()->route('lessons.show', [$course->slug, $lesson->slug])->with('success', 'Lesson updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $course_slug, string $slug)
    {
        $course = Course::where('slug', $course_slug)->firstOrFail();
        if (auth()->user()->id != $course->user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }
        
        $lesson = $course->lessons()->where('slug', $slug)->firstOrFail();
        $lesson->delete();
        return redirect()->route('courses.show', $course_slug);
    }

    public function takeLesson(string $course_slug, string $slug)
    {
        $user = auth()->user();
        $course = Course::where('slug', $course_slug)->firstOrFail();
        $lesson = $course->lessons()->where('slug', $slug)->firstOrFail();

        $user->lessons()->syncWithoutDetaching([$lesson->id]);
        return;
    }

    public function vote(Request $request, string $course_slug, string $slug)
    {
        $validated = $request->validate([
            'value' => 'required|integer|between:-1,1'
        ]);

        $user = auth()->user();
        $course = Course::where('slug', $course_slug)->firstOrFail();
        $lesson = $course->lessons()->where('slug', $slug)->firstOrFail();

        $this->takeLesson($course_slug, $slug);
        $user->lessons()->updateExistingPivot($lesson->id, [
            'vote' => $validated['value']
        ]);

        return back()->with('success', 'Vote updated!');
    }

    public function rate(Request $request, string $course_slug, string $slug)
    {
        $validated = $request->validate([
            'value' => 'required|integer|between:1,5'
        ]);

        $user = auth()->user();
        $course = Course::where('slug', $course_slug)->firstOrFail();
        $lesson = $course->lessons()->where('slug', $slug)->firstOrFail();

        $this->takeLesson($course_slug, $slug);
        $user->lessons()->updateExistingPivot($lesson->id, [
            'rating' => $validated['value']
        ]);

        return back()->with('success', 'Rating updated!');
    }

    public function finish($course_slug, $slug)
    {
        $user = auth()->user();
        $course = Course::where('slug', $course_slug)->firstOrFail();
        $lesson = $course->lessons()->where('slug', $slug)->firstOrFail();

        if (!$user->enrolledCourses()->where('course_id', $course->id)->exists()) {
            abort(403, 'You must enroll in the course first');
        }

        $user->lessons()->syncWithoutDetaching([$lesson->id => ['is_finished' => true]]);
        
        return back()->with('success', 'Finished lesson!');
    }
}
