<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends BaseController
{
    public function index()
    {
        $movies = Movie::all();

        return $this->success('Film Listelendi', $movies);
    }

    public function detail($id)
    {
        $movie_detail = Movie::where('id', $id)->with('category')->with('images')->with('casts')->with('casts.cast')->first();
       
        if(!isset($movie_detail)){
            return $this->error('Film detayı Bulunamadı');
        }

        return $this->success('Film detayı çekildi', $movie_detail);
    }
}
