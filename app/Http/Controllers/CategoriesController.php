<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($id)
    {
        $categories = Course::where('category_id', $id)->get();
        return view('category', compact('categories'));
    }
}
