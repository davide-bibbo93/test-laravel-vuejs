<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Videogame;

class ApiController extends Controller
{
    public function __invoke()
    {
        $videogames = Videogame::all();
        return response()->json($videogames);
    }
}
