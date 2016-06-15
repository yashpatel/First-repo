<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use App\Reservation;


class BookingController extends ApiGuardController
{
    //
    public function all()
    {
        $reservation = Reservation::all();
        return [];
    }
}
