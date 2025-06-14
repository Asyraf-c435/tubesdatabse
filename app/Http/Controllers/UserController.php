<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function register() {
        return view('register');
    }

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
            'name' => 'required|unique:users,name|max:255',
            'display_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'description' => 'nullable|string',
            'country_id' => 'required|integer|exists:countries,id',
            'subscription_id' => 'required|integer|exists:subscriptions,id',
            'twitter' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'tiktok' => 'nullable|url|max:255',
            'type' => 'required|integer|min:0',
            'rank' => 'required|integer|min:0',
            'status_points' => 'required|integer|min:0',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'display_name' => $validated['display_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'description' => $validated['description'] ?? null,
            'image_link' => null,
            'user_link' => null,
            'country_id' => $validated['country_id'] ?? null,
            'subscription_id' => $validated['subscription_id'] ?? null,
            'twitter' => $validated['twitter'] ?? null,
            'facebook' => $validated['facebook'] ?? null,
            'linkedin' => $validated['linkedin'] ?? null,
            'instagram' => $validated['instagram'] ?? null,
            'tiktok' => $validated['tiktok'] ?? null,
            'type' => $validated['type'],
            'rank' => $validated['rank'],
            'status_points' => $validated['status_points'],
            'created_at' => now()
        ]);

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('profile', compact('user'));
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
        $user = User::findOrFail($id);
        
        $validated = $request->validate([
            'name' => "sometimes|max:255|unique:users,name,{$user->id}",
            'display_name' => 'sometimes|max:255',
            'email' => "sometimes|email|unique:users,email,{$user->id}",
            'password' => ['sometimes', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'description' => 'sometimes|nullable|string',
            'country_id' => 'sometimes|integer|exists:countries,id',
            'subscription_id' => 'sometimes|integer|exists:subscriptions,id',
            'twitter' => 'sometimes|nullable|string|max:255',
            'facebook' => 'sometimes|nullable|string|max:255',
            'linkedin' => 'sometimes|nullable|string|max:255',
            'instagram' => 'sometimes|nullable|string|max:255',
            'tiktok' => 'sometimes|nullable|string|max:255',
            'type' => 'sometimes|integer|min:0',
            'rank' => 'sometimes|integer|min:0',
            'status_points' => 'sometimes|integer|min:0',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return;
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return;
    }

// everything under this is new experimental shit code

    // public function login()
    //     {
    //         if (Auth::check()) {
    //             return redirect('home');
    //         }else{
    //             return view('login');
    //         }
    //     }

    // public function actionlogin(Request $request)
    // {
    //     $data = [
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //     ];

    //     if (Auth::Attempt($data)) {
    //         return redirect('home');
    //     } else {
    //         return redirect('/');
    //     }
    // }
}
