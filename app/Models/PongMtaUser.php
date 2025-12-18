<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PongMtaUser extends Authenticatable
{
    protected $table = 'pong_mta_users';

    protected $fillable = [
        'fullname',
        'address',
        'mobile_number',
        'password',
        'mobile_verified',
        'otp',
        'otp_expires_at',
    ];

    protected $hidden = [
        'password',
        'otp',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'mobile_verified' => 'boolean',
        'otp_expires_at' => 'datetime',
    ];
}
