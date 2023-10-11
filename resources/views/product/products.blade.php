@extends('layout.layouts')
@section('title','Товары')
@section('content')
<a href="{{ route('products.create') }}" class="product-add">Добавить товар</a>

@if(session()->has('success'))
    <div class="content_row" style="color: green">
        {{session()->get('success')}}
    </div>
@endif
<div class="content_column">
    @foreach($data->product as $prod)
    <a href="/products/{{$prod->id}}">
        <div class="product_item">
            <div>
                <img src="{{asset('public/'.$prod->image)}}" alt="{{$prod->name}}" class="product_img">
                <h2>{{$prod->name}}</h2>
                <h3>{{$prod->price}} ₽</h3>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection
