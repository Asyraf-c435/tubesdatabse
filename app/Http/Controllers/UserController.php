<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


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
            'name' => 'required|unique:app_users,name|max:255',
            'email' => 'required|email|unique:app_users,email',
            'password' => ['required', 'confirmed',  Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'display_name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'description' => null,
            'image_link' => 'images/profile/default.png',
            'user_link' => null,
            'country_id' => null,
            'subscription_id' => null,
            'twitter' => null,
            'facebook' => null,
            'linkedin' => null,
            'instagram' => null,
            'tiktok' => null,
            'type' => 0,
            'rank' => 0,
            'status_points' => 0,
            'created_at' => now()
        ]);

        return redirect()->route('login')->with('success', 'Account created. Please log in.');
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
    public function update(Request $request)
    {
        $user = Auth::user();
        
        $validated = $request->validate([
            'name' => "sometimes|max:255|unique:app_users,name,{$user->id}",
            'display_name' => 'sometimes|max:255',
            'current_email' => "sometimes|email",
            'email' => "sometimes|confirmed|email|unique:app_users,email,{$user->id}",
            'current_password' => ['sometimes', 'current_password', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'password' => ['sometimes', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'description' => 'sometimes|nullable|string',
            'image_link' => 'sometimes|nullable|string',
            'country_id' => 'sometimes|nullable|integer|exists:countries,id',
            'subscription_id' => 'sometimes|integer|exists:subscriptions,id',
            'twitter' => 'sometimes|nullable|url',
            'facebook' => 'sometimes|nullable|url',
            'linkedin' => 'sometimes|nullable|url',
            'instagram' => 'sometimes|nullable|url',
            'tiktok' => 'sometimes|nullable|url',
            'type' => 'sometimes|integer|min:0',
            'rank' => 'sometimes|integer|min:0',
            'status_points' => 'sometimes|integer|min:0',
        ]);

        if (isset($validated['current_email']) && $validated['current_email'] !== $user->email) {
            unset($validated['email']);
            throw ValidationException::withMessages([
                'current_email' => ['The current email you entered does not match your account email.'],
            ]);
        }
        
        if (isset($validated['email']) && $validated['email'] === $user->email) {
            unset($validated['email']);
            throw ValidationException::withMessages([
                'email' => ['The new email must be different from your current email.'],
            ]);
        }

        if (isset($validated['current_email'])) {
            unset($validated['current_email']);
        }

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $validated['image_link'] = UserController::imageUpload($request);
        $validated = array_filter($validated, fn($value) => !is_null($value));

        $user->update($validated);

        return back()->with('success', 'Profile updated.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return;
    }

    public function imageUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Auth::id() . '.' . $extension;

            $destination = public_path('images/profile');

            if (!file_exists($destination)) {
                mkdir($destination, 0755, true);
            }

            $image->move($destination, $imageName);

            return "/images/profile/$imageName";
        }

        return null;
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
