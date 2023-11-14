<?php 
 
namespace App\Http\Controllers; 
use App\Models\Application; 
use Illuminate\Http\Request; 
 
class ApplicationController extends Controller 
{ 
    public function new_application(Request $request){ 
      $application_info= $request->all();    
      $request->validate([
        "email"=>"required|email",
        "name"=>"required|max:50"
      ],
    [
      "email.required"=>"Поле email не заполнено!",
      "email.email"=>"Укажите действительный адрес почты",
      "name.required"=>"Поле Name не заполнено!",
      "name.max"=>"Имя должно быть не более 50 символов!"
    ]);
      Application::create([ 
        "email"=>$application_info["email"], 
        "name"=>$application_info["name"], 
        "course_id"=>$application_info["course"], 
      ]); 
      return redirect("/")->with([
        "alert" => "Заявка успешно создана"
      ]);
    } 
    public function confirm($id_application)

    {
        $application = Application::find($id_application);
        $application ->is_confirm=1;
        $application ->save();
        return redirect("/admin");
    }
}
