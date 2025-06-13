<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'user_id',
        'category',
        'name',
        'description',
        'is_private'
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'description'=> 'string',
        'is_private' => 'boolean',
        'category' => 'integer'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function websites()
    {
        return $this->belongsToMany(Website::class, 'website_collections', 'collection_id', 'website_id');
    }
}
