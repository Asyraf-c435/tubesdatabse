<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::with(['user'])
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
            ->when(auth()->check(), function ($query) {
                $query->addSelect([
                    'user_rating' => DB::table('course_user')
                        ->select('rating')
                        ->whereColumn('course_id', 'courses.id')
                        ->where('user_id', auth()->id())
                        ->limit(1),
                        
                    'user_vote' => DB::table('course_user')
                        ->select('vote')
                        ->whereColumn('course_id', 'courses.id')
                        ->where('user_id', auth()->id())
                        ->limit(1),
                ]);
            })
            ->orderByDesc('created_at')
            ->limit(6)
            ->get();

        return view('index', compact('courses'));
    }
}