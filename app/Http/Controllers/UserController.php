<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function home(){
        return view('layout.layouts');
    }
    public function info(){
        return view('layout.info');
    }
    public function create(){
        return view('auth.reg');
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'firstname'=>['required','alpha'],
            'lastname'=>['required','alpha'],
            'patronymic'=>['nullable'],
            'email'=>['email','unique:users'],
            'password'=>['required','min:6','confirmed'],
        ]);
        if($validator->fails()){
            return redirect()->route('create')->with('success','Ошибка регистрации');
        }
        else{
            User::create($request->all());
            return redirect()->route('login')->with('success','Регистрации прошла успешно');
        }
    }
    public function login(){
        return view('auth.auth');
    }
    public function signup(Request $request){
        if(Auth::attempt($request->only(['email','password']))){
            return redirect()->route('index')->with('success','Вы авторизованы');
        }
    }

}
