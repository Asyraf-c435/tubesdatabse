<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        "teacher_id",
        "name",
        "description",
        "rating",
        "price"
    ];

    protected $casts = [
        "id" => "integer",
        "teacher_id" => "integer",
        "name" => "string",
        "description"=> "string",
        "rating"=> "integer",
        "price"=> "integer"
    ];

    public $timestamps = false;

    public function teacher() 
    {
        return $this->belongsTo(User::class, "teacher_id", "id");
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'user_courses','course_id', 'user_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class,'course_id','id');
    }
}
