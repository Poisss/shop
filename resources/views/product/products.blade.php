@extends('layout.layouts')
@section('title','Товары')
@section('content')
<a href="{{ route('products.create') }}">Добавить товар</a>
<div class="content_column">
    @foreach($data->product as $prod)
    <a href="/products/{{$prod->id}}">
        <div class="product_item">
            <div>
                <img src="" alt="">
                <h2>{{$prod->name}}</h2>
                <h3>{{$prod->price}}</h3>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection
