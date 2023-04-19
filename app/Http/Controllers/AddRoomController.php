<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddRoomController extends Controller
{
    public function AddRoom()
    {
        return view('add_room_page');
    }
}
