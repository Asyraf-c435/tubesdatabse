<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'id' => 'integer',
        'name'=> 'string'
    ];

    public $timestamps = false;
    
    public function websites()
    {
        return $this->hasMany(Website::class,"category_id","id");
    }
}
