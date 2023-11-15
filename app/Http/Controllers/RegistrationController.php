<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
            "confirm_pass"=>"required|same:password",
        ],[
            "email.required"=>"Поле обязательно для заполнения!",
            "name.required"=>"Поле обязательно для заполнения!",
            "email.email"=>"Введите корректный email",
            "email.unique"=>"Данный email уже занят",
            "password.required"=>"Поле обязательно для заполнения!",
            "confirm_pass.required"=>"Поле обязательно для заполнения!",
        ]);
        $userInfo=$request->all();

        $user_create=User::create([
            "email"=>$userInfo["email"],
            "name"=>$userInfo["name"],
            "password"=>Hash::make($userInfo["password"]),
        ]);
        if ($user_create)
        return redirect("authorization")->with("success","");
    return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
    }
}
