<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(2);
        return view(
            'index',
            compact("courses")
        );
    }

    public function create(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "duration" => "required|integer",
            "cost" => "required|integer",
            "category_id" => "required",
            "img" => "required",
        ], [
            "title.required" => "Поле title не заполнено!",
            "description.required" => "Поле description не заполнено!",
            "duration.required" => "Поле duration не заполнено!",
            "cost.required" => "Поле cost не заполнено!",
            "category_id.required" => "Поле Category не заполнено!",
            "img.required" => "Поле img не заполнено!",
        ]);

        $course_info = $request->all();

        $file = $request->file('image');
        if (!empty($file)) {
            $file_name = md5($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
            Storage::putFileAs('public/image', $file, $file_name);
            Course::create([
                'title' => $course_info['title'],
                'description' => $course_info['description'],
                'duration' => $course_info['duration'],
                'cost' => $course_info['cost'],
                'img' => $file_name,
                'category_id' => $course_info['category_id'],
            ]);
        } else {
            Course::create([
                'title' => $course_info['title'],
                'description' => $course_info['description'],
                'duration' => $course_info['duration'],
                'cost' => $course_info['cost'],
                'category_id' => $course_info['category_id'],
            ]);
        }

        return redirect('/admin')->with([
            'alert' => 'Заявка успешно создана',
        ]);
    }
}
