<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'activity_id' => 'integer',
        'user_id' => 'integer',
    ];


    public function activity()
    {
        return $this->belongsTo(\App\Models\Activity::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
