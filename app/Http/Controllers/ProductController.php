<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

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
    public function create(){
        $category=Category::all();
        return view('product.create')->with(['category'=>$category]);
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>['required','max:125'],
            'price'=>'required',
            'qty'=>'required',
            'description'=>'nullable',
            'category_id'=>'required'
        ]);
        if($validator->fails()){
            $msg='Ошибка при заполнении формы';
            return redirect()->route('products.create')->with('success','Ошибка при заполнении формы');
        }else{
            Product::create($validator->validated());
            return redirect()->route('products.index')->with('success','Товар добавлен');
        }
    }
    public function edit(string $id){
        $category=Category::all();
        $pro=Product::find($id);
        return view('product.edit',compact('pro'))->with(['category'=>$category]);
    }
    public function update(Request $request,Product $product){
        $product->update($request->all());
        return  redirect()->route('products.index')->with('success','Товар изменен');
    }
    public function destroy(string $id){
       $product=Product::find($id);
       $product->delete();
        return  redirect()->route('products.index')->with('success','Товар Удален');
    }
}
