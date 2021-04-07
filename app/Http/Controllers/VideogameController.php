<?php

namespace App\Http\Controllers;
use App\Videogame;

use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function index() {
        return view('index');
    }
}
