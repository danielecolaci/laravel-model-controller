<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        dd(Movie::all());
        return view('guest.film');
    }

    public function series(){
        return view('guest.series');
    }

    public function anime(){
        return view('guest.anime');
    }
}
