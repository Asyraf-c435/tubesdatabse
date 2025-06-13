<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = [
        'website_id',
        'type',
        'awarded_date'
    ];

    protected $casts = [
        'id' => 'integer',
        'website_id' => 'integer',
        'type' => 'integer',
        'awarded_date' => 'datetime'
    ];

    public $timestamps = false;

    public function website()
    {
        return $this->belongsTo(Website::class, 'website_id', 'id');
    }
}
