<?php
namespace App\Http\Models\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function authorization()
    {
        return view('authorization');
    }
    public function signin_valid(Request $request){
        $request->validate([
            "email"=>"required|email",
            "password"=>"required",
        ],[
            "email.required"=>"Поле обязательно для заполнения!",
            "email.email"=>"Введите корректный email",
            "password.required"=>"Поле обязательно для заполнения!",
        ]);

        $user = $request->only("email","pass");
        bb($user);
    }
}
