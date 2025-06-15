<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($a)
    {
        if ($a == 0) {
            $websites = Website::doesntHave('awards')->get();
        } else {
            $websites = Website::whereHas('awards', function ($query) use ($a) {
                if ($a == 1) {
                    $query->where('type', '>=', $a);
                } else {
                    $query->where('type', $a);
                }
            })->with('awards')->get();
        }
        
        return view('isianexplore', compact('websites'));
    }

    public function submit()
    {
        return view('submit-web');
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
            'user_id' => 'required|integer|exists:users,id',
            'name' => 'required|max:255',
            'description'=>'required|string',
            'link'=>'required|url|max:255',
            'image_link'=>'required|url|max:255',
            'category_id'=>'required|integer|exists:categories,id'
        ]);

        $website = Website::create([
            'user_id'=> $validated['user_id'],
            'name' => $validated['name'],
            'description'=> $validated['description'],
            'link'=> $validated['link'],
            'image_link' => $validated['image_link'],
            'category_id'=> $validated['category_id'],
            'created_at' => now()
        ]);

        return;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $website = Website::findOrFail($id);

        if ($website->awards->isEmpty()) {
            return view('sitesbynamenms', compact('website'));
        } else {
            return view('sites', compact('website'));
        }
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
        $website = Website::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|max:255',
            'description'=>'sometimes|string',
            'link'=>'sometimes|url|max:255',
            'image_link'=>'sometimes|url|max:255',
            'category_id'=>'sometimes|integer|exists:categories,id'
        ]);

        $website->update($validated);

        return;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Website::findOrFail($id)->delete();
        return;
    }

    public function vote(Request $request, $user_id, $website_id)
    {
        $website = Website::findOrFail($website_id);

        $validated = $request->validate([
            'design'=>'required|int|min:0|max:10',
            'usability'=>'required|int|min:0|max:10',
            'creativity'=>'required|int|min:0|max:10',
            'content'=>'required|int|min:0|max:10',
        ]);

        $website->website_votes()->syncWithoutDetaching([$user_id => [
            'is_rejected'=> 0,
            'design' => $validated['design'],
            'usability' => $validated['usability'],
            'creativity' => $validated['creativity'],
            'content' => $validated['content']
        ]]);

        return redirect()->route('site', $website_id);
    }
}
