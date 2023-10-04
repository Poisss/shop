<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product=Product::all();
        $data=(object)[
            'product'=>$product
        ];
        return view('product.products')->with(['data'=>$data]);
    }
    public function show(Request $request, $id){
        $product=Product::find($id);
        $category=Category::find($product->category_id)->name;
        $data=(object)[
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'description'=>$product->description,
            'category'=>$product->category->name
        ];
        return view('product.show')->with(['data'=>$data]);
    }
    public function store(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
