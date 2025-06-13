<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'teacher_id'=>'required|integer|exists:users,id',
            'name'=>'required|max:255',
            'description'=>'required|string',
            'rating' => 'required|integer|min:0|max:5',
            'price' => 'required|integer|min:0'
        ]);

        $course = Course::create([
            'teacher_id' => $validated['teacher_id'],
            'name' => $validated['name'],
            'description'=> $validated['description'],
            'rating' => $validated['rating'],
            'price' => $validated['price']
        ]);

        return;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'name'=>'sometimes|max:255',
            'description'=>'sometimes|string',
            'rating' => 'sometimes|integer|min:0|max:5',
            'price' => 'sometimes|integer|min:0'
        ]);

        $course->update($validated);

        return;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::findOrFail($id)->delete();
        return;
    }
}
