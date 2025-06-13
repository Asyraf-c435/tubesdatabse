<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    public $timestamps = false;
    
    public function users()
    {
        return $this->hasMany(User::class, 'country_id', 'id');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class,'country_id','id');
    }
}
