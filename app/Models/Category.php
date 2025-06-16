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
        return $this->belongsToMany(Website::class,"website_categories","category_id", 'website_id');
    }
}
