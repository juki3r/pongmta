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
    ];

    protected $hidden = [
        'password',
    ];
}
