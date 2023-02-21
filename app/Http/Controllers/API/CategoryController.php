<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;

class CategoryController extends BaseController
{
    public function index()
    {
        $category = Category::all();
        return $this->success('Kategori Listelendi', $category);
    }

    public function detail($category_id)
    {
        $category_detail = Category::findOrFail($category_id);

        $movies = Movie::whereRaw('category_id REGEXP"(^|,)('.$category_id.')(,|$)"')->get();

        return $this->success('Kategori Listelendi', [
           'category' => $category_detail,
           'movies' => $movies
        ]);
    }
}
