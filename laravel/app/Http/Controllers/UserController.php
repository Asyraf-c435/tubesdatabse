<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:6|max:255|unique:users,name',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'slug' => User::generateUniqueSlug($request->name),
            'display_name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'User created! Please login now.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $user = User::with(['badges', 'enrolledCourses'])
            ->withCount('courses')
            ->where('slug', $slug)
            ->firstOrFail();

        $courses = $user->courses()
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
            ->orderByDesc('created_at')
            ->get();

        return view('users.show', compact('user', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();

        if (auth()->user()->id != $user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        if (auth()->user()->id != $user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }

        $validated = $request->validate([
            'name' => "required|string|min:6|max:255|unique:users,name,$user->id",
            'display_name' => 'filled|string|max:255',
            'email' => "required|email|unique:users,email,$user->id",
            'current_password' => 'nullable|required_with:password',
            'password' => 'nullable|string|confirmed|min:8',
            'description' => 'filled|string',
            'image' => 'sometimes|image|max:8192'
        ]);

        if ($request->filled('password')) {
            if (!Hash::check($request->current_password, auth()->user()->password)) {
                return back()->withErrors(['current_password' => 'Current password is incorrect.']);
            }
        }

        if ($request->hasFile('image')) {
            if ($user->image_link) {
                $oldImagePath = str_replace('/storage/', '', $user->image_link);
                if (Storage::disk('public')->exists($oldImagePath)) {
                    Storage::disk('public')->delete($oldImagePath);
                }
            }

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = "{$user->id}.{$extension}";
            
            $path = $image->storeAs('users', $filename, 'public');
            $validated['image_link'] = Storage::disk('public')->url($path);
        }

        if (array_key_exists('name', $validated) && $user->name !== $validated['name']) {
            $validated['slug'] = User::generateUniqueSlug($validated['name']);
        }

        if (empty($validated['password'])) {
            unset($validated['password']);
            unset($validated['password_confirmation']);
            unset($validated['current_password']);
        }

        $validated = array_filter($validated, fn($value) => $value !== null);
        $user->update($validated);

        return redirect()->route('users.show', $user->slug)->with('success', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        if (auth()->user()->id != $user->id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }

        $user->delete();

        return redirect()->route('login')->with('success', 'User deleted!');
    }

    public function showLoginForm()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
