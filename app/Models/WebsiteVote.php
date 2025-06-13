<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteVote extends Model
{
    protected $fillable = [
        'website_id',
        'user_id',
        'is_rejected',
        'design',
        'usability',
        'creativity',
        'content'
    ];

    protected $casts = [
        'id' => 'integer',
        'website_id' => 'integer',
        'user_id' => 'integer',
        'is_rejected' => 'boolean',
        'design' => 'integer',
        'usability' => 'integer',
        'creativity' => 'integer',
        'content' => 'integer'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function website()
    {
        return $this->belongsTo(Website::class,'website_id','id');
    }
}
