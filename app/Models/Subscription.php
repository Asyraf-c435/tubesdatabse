<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'plan',
        'price',
        'is_annual',
        'purchased_at'
    ];

    protected $casts = [
        'id' => 'integer',
        'plan' => 'integer',
        'price' => 'integer',
        'is_annual' => 'boolean',
        'purchased_at' => 'datetime'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class, 'subscription_id', 'id');
    }
}