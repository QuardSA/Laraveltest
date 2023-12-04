<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show()
    {
        $categories = Category::all();
        return view("index", ['categories'=>$categories]);
    }
    public function categories($id)
    {
        $categories_find = Category::find($id)->categories;

        // dd ($categories_find);
        return view('category', ['categories'=>$categories_find]);
    }
}
