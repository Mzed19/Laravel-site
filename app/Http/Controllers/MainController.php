<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
    public function sucess(Request $request){
       
    $name = $request->input("name");
    $email = $request->input("email");
    $password = $request->input("password");
    $passwordreplace = $request->input("passwordreplace");

    //password validation
    if($password == $passwordreplace){
    $user = User::create([
        "name" => $name,
        "email" => $email,
        "password" => $password
    ]);
    echo "<script>alert('Account created with sucess!');</script>";  
    return redirect ('/');
      
    }

    else{
        echo "<script>alert('passwords do not match!');</script>";
        return redirect ('/signup');
    }
}








}
