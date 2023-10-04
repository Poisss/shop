@extends('layout.layouts')
@section('title','Товар')
@section('content')
<h2>О нас</h2>
<div class="content_row">
    <div class="product_item">
        <div>
            <img src="" alt="">
            <h2>{{$data->name}}</h2>
            <h3>{{$data->price}}</h3>
        </div>
        <div class="content_column">
            <div class="text_content">
                <h3>
                    Описание:
                </h3>
                <hr>
                <p>
                    Катерогия:{{$data->category}}
                </p>
                <p>
                    Характеристики:{{$data->description}}
                </p>
                <a href="{{route('products.index')}}">Назад</a>
            </div>
        </div>
    </div>
</div>
@endsection
