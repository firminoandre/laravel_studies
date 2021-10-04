<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function homePage(){
        return view('welcome');
    }

    public function createEvent(){
        return view('events.create');
    }
}
