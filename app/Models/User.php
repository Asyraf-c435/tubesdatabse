<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'app_users';

    protected $fillable = [
        'name',
        'display_name',
        'email',
        'password',
        'description',
        'country_id',
        'subscription_id',
        'twitter',
        'facebook',
        'linkedin',
        'instagram',
        'tiktok',
        'type',
        'rank',
        'status_points',
        'created_at'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'display_name' => 'string',
        'email'=> 'string',
        'description' => 'string',
        'country_id'=> 'integer',
        'subscription_id' => 'integer',
        'twitter' => 'string',
        'facebook' => 'string',
        'linkedin' => 'string',
        'instagram' => 'string',
        'tiktok' => 'string',
        'password' => 'hashed',
        'type' => 'integer',
        'rank' => 'integer',
        'status_points' => 'integer',
        'remember_token' => 'string',
        'created_at' => 'datetime'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'subscription_id', 'id');
    }

    public function websites()
    {
        return $this->hasMany(Website::class, 'user_id', 'id');
    }

    public function collaborator_in()
    {
        return $this->belongsToMany(Website::class, 'website_collaborators', 'user_id', 'website_id');
    }

    public function website_votes()
    {
        return $this->hasMany(WebsiteVote::class,'user_id', 'id');
    }

    public function user_votes()
    {
        return $this->hasMany(UserVote::class,'user_id', 'id');
    }

    public function collections()
    {
        return $this->hasMany(Collection::class, 'user_id','id');
    }

    public function jobs_posted()
    {
        return $this->hasMany(Job::class,'employer_id', 'id');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class,'employee_id', 'id');
    }

    public function courses_held() 
    {
        return $this->hasMany(Course::class,'teacher_id', 'id');
    }

    public function courses_enrolled()
    {
        return $this->belongsToMany(Course::class,'user_courses','user_id', 'course_id');
    }

    public function awards()
    {
        return $this->hasManyThrough(Award::class, Website::class, 'user_id', 'website_id', 'id', 'id');
    }
}
    