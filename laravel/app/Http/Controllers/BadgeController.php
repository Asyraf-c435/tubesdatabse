<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;
use App\Models\Badge;
use Illuminate\Support\Facades\Auth;

class BadgeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        if (!auth()->user()->isAdmin() && auth()->user()->id != $course->user->id) {
            abort(403, 'Unauthorized Action');
        }
        return view('badges.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        if (!auth()->user()->isAdmin() && auth()->user()->id != $course->user->id) {
            abort(403, 'Unauthorized Action');
        }

        $request->validate([
            'name' => 'required|string|min:3|max:255|unique:badges,name',
            'image' => 'required|image|max:8192',
        ]);

        $badge = $course->badges()->create([
            'name' => $request->name,
            'image_link' => 'https://tr.rbxcdn.com/180DAY-82b9e18ff89bb5bfa61690360d4e4386/150/150/Image/Webp/noFilter'
        ]);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = "$badge->id.$extension";
        
        $path = $image->storeAs(
            'courses/badges', 
            $filename,
            'public'
        );
        
        $image_link = Storage::disk('public')->url($path);
        $badge->update(['image_link' => $image_link]);

        return redirect()->route('courses.show', $slug)->with('success', 'Badge created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug, $id)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $badge = Badge::findOrFail($id);
        
        if (!auth()->user()->isAdmin() && auth()->user()->id != $course->user->id) {
            abort(403, 'Unauthorized Action');
        }

        return view('badges.edit', compact('course', 'badge'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug, $id)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $badge = Badge::findOrFail($id);
        
        if (!auth()->user()->isAdmin() && auth()->user()->id != $course->user->id) {
            abort(403, 'Unauthorized Action');
        }

        $request->validate([
            'name' => "required|string|min:3|max:255|unique:badges,name,$id",
            'image' => 'sometimes|image|max:8192',
        ]);

        $badge->update(['name' => $request->name]);

        if ($request->hasFile('image')) {
            if ($badge->image_link) {
                $oldImagePath = str_replace(Storage::disk('public')->url(''), '', $badge->image_link);
                Storage::disk('public')->delete($oldImagePath);
            }

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = "$badge->id.$extension";
            
            $path = $image->storeAs(
                'courses/badges', 
                $filename,
                'public'
            );
            
            $image_link = Storage::disk('public')->url($path);
            $badge->update(['image_link' => $image_link]);
        }

        return redirect()->route('courses.show', $slug)->with('success', 'Badge updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, $id)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $badge = Badge::findOrFail($id);
        
        if (!auth()->user()->isAdmin() && auth()->user()->id != $course->user->id) {
            abort(403, 'Unauthorized Action');
        }
        
        $badge->delete();
        return redirect()->route('courses.show', $slug)->with('success', 'Badge deleted!');
    }

    public function claim($slug, $id)
    {
        $user = Auth::user();
        $course = Course::where('slug', $slug)->firstOrFail();
        $badge = Badge::findOrFail($id);
        
        $totalLessons = $course->lessons()->count();
        $completedLessons = $user->lessons()
            ->where('course_id', $course->id)
            ->wherePivot('is_finished', true)
            ->count();
        
        if ($completedLessons < $totalLessons) {
            abort(403, 'Complete all lessons to claim this badge');
        }

        $user->badges()->syncWithoutDetaching([$badge->id]);
        
        return redirect()->route('courses.show', $slug)->with('success', 'Badge claimed successfully!');
    }
}