<?php
namespace App\Http\Models\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
        public function registration()
    {
        return view('registration');
    }
    public function signup_valid(Request $request){
        $request->validate([
            "email"=>"required|unique:users|email",
            "name"=>"required",
            "password"=>"required",
            "confirm_pass"=>"required|same:pass",
        ],[
            "email.required"=>"Поле обязательно для заполнения!",
            "name.required"=>"Поле обязательно для заполнения!",
            "email.email"=>"Введите корректный email",
            "email.unique"=>"Данный email уже занят",
            "password.required"=>"Поле обязательно для заполнения!",
            "confirm_pass.required"=>"Поле обязательно для заполнения!",
        ]);
        $userInfo=$request->all();

        User::create([
            "email"=>$userInfo["email"],
            "name"=>$userInfo["name"],
            "password"=>$userInfo["password"],
        ]);
        return redirect("/registration")->with("success","");
    }
}
