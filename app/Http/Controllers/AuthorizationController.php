<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

        $user = $request->only("email","password");
        if (Auth::attempt([
           "email" => $user["email"],
           "password" => $user["password"]
       ]))
       {    
        return redirect("/")->with("success","");
       }
       return redirect()->back()->with("error","Неверный логин или пароль");
    }
        public function signout() {
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
