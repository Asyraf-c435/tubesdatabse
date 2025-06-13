<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
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
            'employer_id' => 'required|integer|exists:users,id',
            'employee_id' => 'required|integer|exists:users,id',
            'title' => 'required|max:255',
            'category' => 'required|integer|min:0|max:2',
            'type'=>'required|integer|min:0|max:3',
            'is_remote'=>'required|boolean',
            'company_name'=>'required|max:255',
            'company_website'=>'required|url|max:255',
            'company_logo'=>'required|url|max:255',
            'apply_with'=>'required|integer|min:0|max:1',
            'apply_at'=>'required|max:255',
            'location'=>'required|max:255' 
        ]);

        $job = Job::create([
            'employer_id' => $validated['employer_id'],
            'employee_id' => $validated['employee_id'],
            'title' => $validated['title'],
            'category' => $validated['category'],
            'type' => $validated['type'],
            'is_remote' => $validated['is_remote'],
            'company_name' => $validated['company_name'],
            'company_website' => $validated['company_website'],
            'company_logo' => $validated['company_logo'],
            'apply_with' => $validated['apply_with'],
            'created_at' => now()
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
        $job = Job::findOrFail($id);

        $validated = $request->validate([
            'employee_id' => 'sometimes|integer|exists:users,id',
            'title' => 'sometimes|max:255',
            'category' => 'sometimes|integer|min:0|max:2',
            'type'=>'sometimes|integer|min:0|max:3',
            'is_remote'=>'sometimes|boolean',
            'company_name'=>'sometimes|max:255',
            'company_website'=>'sometimes|url|max:255',
            'company_logo'=>'sometimes|url|max:255',
            'apply_with'=>'sometimes|integer|min:0|max:1',
            'apply_at'=>'sometimes|max:255',
            'location'=>'sometimes|max:255' 
        ]);

        $job->update($validated);

        return;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Job::findOrFail($id)->delete();
        return;
    }
}
