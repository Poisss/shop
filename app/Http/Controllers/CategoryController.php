<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $product=Category::all();
        $data=(object)[
            'product'=>$product
        ];
        return view('category.categories')->with(['data'=>$data]);
    }
}
