<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

use App\Http\Requests;

class EventsController extends Controller
{
    public function store(Request $request)
    {
        $data = $request -> only('user_id','name','reason','location');
        $event = Events::create($data);

    }
}
