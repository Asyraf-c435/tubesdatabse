<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVote extends Model
{
    protected $fillable = [
        'user_id',
        'website_id',
        'is_rejected',
        'semantics',
        'animations',
        'accessibility',
        'wpo',
        'responsive_design',
        'markup',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'website_id' => 'integer',
        'is_rejected' => 'boolean',
        'semantics' => 'integer',
        'animations' => 'integer',
        'accessibility' => 'integer',
        'wpo' => 'integer',
        'responsive_design' => 'integer',
        'markup' => 'integer'
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
