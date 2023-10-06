@extends('layout.layouts')
@section('title','Категории')
@section('content')
<h2>О нас</h2>
<div class="content_column">
    @foreach($data->product as $prod)
        <div class="product_item">
            <div>
                <h2>{{$prod->name}}</h2>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection
