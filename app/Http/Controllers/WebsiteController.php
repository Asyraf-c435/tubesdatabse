<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\WebsiteElement;

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
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'description' => 'required|string',
            'image' => 'required|image',
            'tags' => 'required|array',
            'elements.*.name' => 'required|string|max:255',
            'elements.*.image' => 'required|image'
        ]);

        $website = Website::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'link' => $request->link,
            'description' => $request->description,
            'image_link' => ''
        ]);

        $siteImagePath = public_path('images/sites');
        $elementImagePath = public_path('images/sites/elements');

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = $website->id . '.' . $extension;
            $request->file('image')->move($siteImagePath, $imageName);
            $website->image_link = 'images/sites/' . $imageName;
            $website->save();
        }

        $website->tags()->syncWithoutDetaching($request->tags);

        foreach ($request->elements as $elementData) {
            $element = WebsiteElement::create([
                'website_id' => $website->id,
                'name' => $elementData['name'],
                'image_link' => ''
            ]);

            if (isset($elementData['image'])) {
                $extension = $elementData['image']->getClientOriginalExtension();
                $imageName = $element->id . '.' . $extension;
                $elementData['image']->move($elementImagePath, $imageName);
                $element->image_link = 'images/sites/elements/' . $imageName;
                $element->save();
            }
        }

        return redirect()->route('sites', $website->id);
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
        ]);

        $website->update($validated);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Website::findOrFail($id)->delete();
        return;
    }

    public function to_vote(string $id)
    {
        $website = Website::findOrFail($id);
    
        if ($website->website_votes->contains(auth()->id())) {
            return back();
        }
        return view('vote', compact('website'));
    }

    public function vote(Request $request, $website_id)
    {
        $website = Website::findOrFail($website_id);
        $user_id = auth()->user()->id;

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

        return redirect()->route('sites', $website_id);
    }
}
