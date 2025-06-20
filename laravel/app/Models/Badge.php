<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Badge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image_link',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function earnedBy()
    {
        return $this->belongsToMany(User::class)->withPivot('obtained_date');
    }
}
