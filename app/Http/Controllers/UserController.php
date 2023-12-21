<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function signin(){
        return view("/");
    }
    public function signin_valid(Request $request){
        $request->validate([
            "phone"=>"required",
            "password"=>"required"
        ],[
            "phone.required"=>"Поле обязательно для заполнения",
            "password.required"=>"Поле обязательно для заполнения",
        ]);
        $user = $request->only("phone","password");

        if(Auth::attempt([
            'phone' => $user['phone'],
            'password' => $user['password']
            ])
            ){
                return redirect("/main")->with("success", "");
            }
            return redirect()->back()->with("error", "Произошла ошибка, попробуйте снова");

    }
    public function signup(){
        return view("/reg");
    }
    public function signup_valid(Request $request){
        $request->validate([
            "nickname" => "required",
            "surname" => "required",
            "name" => "required",
            "email" => "required",
            "phone" => "required|unique:users",
            "password" => "required",
            "confirm_password" => "required|same:password"
        ], [
            "nickname.required" => "Поле обязательно для заполнения",
            "surname.required" => "Поле обязательно для заполнения",
            "name.required" => "Поле обязательно для заполнения",
            "email.required" => "Поле обязательно для заполнения",
            "phone.required" => "Поле обязательно для заполнения",
            "phone.unique" => "Данный номер телефона уже занят",
            "password.required" => "Поле обязательно для заполнения",
            "confirm_password.required" => "Поле обязательно для заполнения",
        ]);

        $userInfo = $request->all();

        $user_create = User::create([
            "nickname"=>$userInfo["nickname"],
            "surname"=>$userInfo["surname"],
            "name"=>$userInfo["name"],
            "email"=>$userInfo["email"],
            "phone"=>$userInfo["phone"],
            "password"=> Hash::make($userInfo["password"]),
            "role_id"=>2,
        ]);
        if($user_create){
        return redirect("/")->with("success","");

    }
    else{
        return redirect()->back()->with("error", "Неверный логин или пароль");
    }
    // public function signout(){
    //     Session::flush();
    //     Auth::logout();
    //     return redirect("/");
    // }


}
}
