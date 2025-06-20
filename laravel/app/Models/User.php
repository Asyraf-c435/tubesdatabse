<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Traits\HasUniqueSlug;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasUniqueSlug;

    protected $fillable = [
        'name',
        'slug',
        'display_name',
        'email',
        'password',
        'image_link',
        'description'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
        'deleted_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function enrolledCourses()
    {
        return $this->belongsToMany(Course::class)->withPivot('rating', 'vote');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class)->withPivot('is_finished', 'rating', 'vote');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function commentVotes()
    {
        return $this->belongsToMany(Comment::class)->withPivot('vote');
    }

    public function badges()
    {
        return $this->belongsToMany(Badge::class)->withPivot('obtained_date');
    }

    public function submittedReports()
    {
        return $this->hasMany(Report::class);
    }

    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }
}
