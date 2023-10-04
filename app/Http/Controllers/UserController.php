<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('layout.layouts');
    }
    public function info(){
        return view('layout.info');
    }
}
