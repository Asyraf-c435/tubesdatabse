<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_listings';

    protected $fillable = [
        'employer_id',
        'employee_id',
        'title',
        'description',
        'category',
        'type',
        'is_remote',
        'company_name',
        'company_website',
        'company_logo',
        'apply_with',
        'apply_at',
        'location',
        'country_id',
        'created_at'
    ];

    protected $casts = [
        'id' => 'integer',
        'employer_id' => 'integer',
        'employee_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'company_name' => 'string',
        'company_website'=> 'string',
        'company_logo' => 'string',
        'is_remote' => 'boolean',
        'category' => 'integer',
        'type' => 'integer',
        'apply_with' => 'integer',
        'apply_at' => 'string',
        'location' => 'string',
        'country_id' => 'integer',
        'created_at' => 'datetime',
    ];

    public $timestamps = false;
    
    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id', 'id');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
