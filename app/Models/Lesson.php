<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        "course_id",
        "name",
        "description",
        "content"
    ];

    protected $casts = [
        "id" => "integer",
        "course_id" => "integer",
        "name" => "string",
        "description"=> "string",
        "content"=> "string"
    ];

    public $timestamps = false;

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
