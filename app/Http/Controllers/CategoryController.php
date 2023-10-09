<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){
        $product=Category::all();
        $data=(object)[
            'product'=>$product
        ];
        return view('category.categories')->with(['data'=>$data]);
    }
    public function create(){
        return view('category.create');
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>['required','max:125'],
        ]);
        if($validator->fails()){
            $msg='Ошибка при заполнении формы';
            return redirect()->route('categories.create')->with('success','Ошибка при заполнении формы');
        }else{
            Category::create($validator->validated());
            return redirect()->route('categories.index')->with('success','Товар добавлен');
        }
    }
    public function edit(string $id){
        $pro=Category::find($id);
        return view('category.edit',compact('pro'));
    }
    public function update(Request $request,Category $product){
        $product->update($request->all());
        return  redirect()->route('categories.index')->with('success','Товар изменен');
    }
    public function destroy(string $id){
       $product=Category::find($id);
       $product->delete();
        return  redirect()->route('categories.index')->with('success','Товар Удален');
    }
}
