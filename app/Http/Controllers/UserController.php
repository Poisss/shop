<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $user_id;
    public $user_role;
    public function authUser(){
        if(Auth::check()){
            $user=Auth::user();
            $this->user_id=$user->id;
            $this->user_role=$user->role;
        }else{
            $this->user_role='quest';
        }
    }
    public function home(){
        $this->authUser();
        $data=(object)[
            'role'=>$this->user_role,
        ];
        return view('layout.layouts')->with(['data'=>$data]);
    }
    public function basket(Request $request){

        $this->authUser();
        $value = $request->session()->get('basket');
        $data=(object)[
            'basket'=>$value,
            'role'=>$this->user_role,
        ];
        return view('purchase.basket')->with(['data'=>$data]);
    }
    public function info(){
        $this->authUser();
        $data=(object)[
            'role'=>$this->user_role,
        ];
        return view('layout.info')->with(['data'=>$data]);
    }
    public function create(){
        $this->authUser();
        $data=(object)[
            'role'=>$this->user_role,
        ];
        return view('auth.reg')->with(['data'=>$data]);
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'firstname'=>['required','alpha'],
            'lastname'=>['required','alpha'],
            'patronymic'=>['nullable'],
            'email'=>['email','unique:users'],
            'password'=>['required','min:6','confirmed']
        ]);
        if($validator->fails()){
            return redirect()->route('create')->with('success','Ошибка регистрации');
        }
        else{
            User::create($validator->validated());
            return redirect()->route('login')->with('success','Регистрации прошла успешно');
        }
    }
    public function login(){
        $this->authUser();
        $data=(object)[
            'role'=>$this->user_role,
        ];
        return view('auth.auth')->with(['data'=>$data]);
    }
    public function signup(Request $request){
        if(Auth::attempt($request->only(['email','password']))){
            return redirect()->route('info')->with('success','Вы авторизованы');
        }
        else{
            return redirect()->route('login')->with('success','Ошибка авторизации');
        }
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('info')->with('success','Вы вышли');
    }
}
