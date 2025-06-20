<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasUniqueSlug;

class Lesson extends Model
{
    use SoftDeletes, HasUniqueSlug;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_link',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function takenBy()
    {
        return $this->belongsToMany(User::class)->withPivot('is_finished', 'rating', 'vote');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }
}
