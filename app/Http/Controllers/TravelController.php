<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index(){

        $viaggi = Travel::all();
        return view("travel", compact("viaggi"));
    }

}
