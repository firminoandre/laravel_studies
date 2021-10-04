<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Event;

class EventController extends Controller
{
    //

    public function homePage(){
        $event = Event::all();
        return view('welcome', ['event' => $event]);
    }

    public function createEvent(){
        return view('events.create');
    }

    public function loginPage(){
        return view('events.login');
    }
}
