<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
            $Category_info=$request->all();

        Category::create([
            "title"=> $Category_info["title"],
        ]);
    
        return redirect()->back();
    }
}
