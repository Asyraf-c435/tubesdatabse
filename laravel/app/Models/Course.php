<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasUniqueSlug;

class Course extends Model
{
    use SoftDeletes, HasUniqueSlug;

    protected $fillable = [
        'name',
        'slug',
        'image_link',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class)->withPivot('rating', 'vote');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function badges()
    {
        return $this->hasMany(Badge::class);
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
