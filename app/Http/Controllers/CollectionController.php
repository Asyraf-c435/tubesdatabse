<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
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
        $collection= Collection::create(request()->all());
        return $collection;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:user,id',
            'name' => 'required|max:255',
            'text' => 'nullable|string',
            'categories' => 'integer',
            'is_private' => 'boolean',
        ]);

        $collection = Collection::create([
            'user_id' => $validated['user_id'],
            'name' => $validated['name'],
            'text' => $validated['text'],
            'categories' => $validated['categories'],
            'is_private' => $validated['is_private']
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
        $collection = Collection::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|max:255',
            'text' => 'sometimes|nullable|string',
            'categories' => 'sometimes|integer',
            'is_private' => 'sometimes|boolean',
        ]);

        $collection->update($validated);

        return;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Collection::findOrFail($id)->delete();
        return;
    }
}
