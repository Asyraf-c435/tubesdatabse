<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'description',
        'link',
        'image_link',
        'created_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id'=> 'integer',
        'category_id'=> 'integer',
        'name'=> 'string',
        'description'=> 'string',
        'link'=> 'string',
        'image_link' => 'string',
        'created_at' => 'datetime',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function elements()
    {
        return $this->hasMany(WebsiteElement::class, 'website_id', 'id');
    }

    public function collaborators()
    {
        return $this->belongsToMany(User::class, 'website_collaborators', 'website_id', 'user_id');
    }

    public function website_votes()
    {
        return $this->belongsToMany(User::class,'website_votes', 'website_id', 'user_id')->withPivot('is_rejected', 'design', 'usability', 'creativity', 'content');
    }

    public function user_votes()
    {
        return $this->belongsToMany(User::class,'user_votes', 'website_id', 'user_id')->withPivot('is_rejected', 'semantics', 'animations', 'accessibility', 'wpo', 'responsive_design', 'markup');
    }

    public function awards()
    {
        return $this->hasMany(Award::class, 'website_id', 'id');
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'website_collections', 'website_id', 'collection_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'website_tags', 'website_id', 'tag_id');
    }
}
