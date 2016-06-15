<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Reservation extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded = ['ID'];
    protected $table = "reservation";
}
