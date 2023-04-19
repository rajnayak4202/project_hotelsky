<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomHistoryController extends Controller
{
    public function RoomHistory(Type $var = null)
    {
        return view('room_history_page');
    }
}
