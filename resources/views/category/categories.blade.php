@extends('layout.layouts')
@section('title','Категории')
@section('content')
<div class="content_column">
    @foreach($data->product as $prod)
        <div class="product_item categoty-item">
            <div>
                <h2>{{$prod->name}}</h2>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection
