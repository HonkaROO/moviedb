<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        
        return Movie::with('movie')->get('mov_id');
    }


    public function show(Movie $movie)
    {
        return $movie->load('mov_id', 'mov_title');
    }


}
