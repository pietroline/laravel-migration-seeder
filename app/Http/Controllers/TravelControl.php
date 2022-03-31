<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelControl extends Controller
{
    public function index(){
        return view("travel");
    }
}
