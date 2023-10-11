<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    }
}
