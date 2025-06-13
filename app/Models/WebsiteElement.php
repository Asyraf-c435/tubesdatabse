<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteElement extends Model
{
    protected $fillable = [
        'website_id',
        'name',
        'image_link',
    ];

    protected $casts = [
        'id' => 'integer',
        'website_id' => 'integer',
        'name' => 'string',
        'image_link' => 'string'
    ];

    public $timestamps = false;

    public function website()
    {
        return $this->belongsTo(Website::class, 'website_id', 'id');
    }
}
