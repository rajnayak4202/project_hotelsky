<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomBookingController extends Controller
{
    public function RoomBooking(Type $var = null)
    {
        return view('room_booking_page');
    }
}