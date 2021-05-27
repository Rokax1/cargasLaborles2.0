<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'activity_id',
        'user_id',
    ];

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
