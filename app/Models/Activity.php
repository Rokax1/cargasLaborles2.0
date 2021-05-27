<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'initial_date',
        'final_date',
        'category_id',
        'owner_id',
        'status_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'owner_id' => 'integer',
        'status_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'initial_date',
        'final_date',
    ];


    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class);
    }

    public function files()
    {
        return $this->hasMany(\App\Models\File::class);
    }

    public function messages()
    {
        return $this->hasMany(\App\Models\Message::class);
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function owner()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class);
    }
}
