<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        //$houses = House::all();

        $houses = House::where('is_available', 1)->get();

        return view('home', compact('houses'));
    }
}
