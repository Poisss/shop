@extends('layout.layouts')
@section('title','Категории')
@section('content')
@if(session()->has('success'))
    <div class="content_row" style="color: green">
        {{session()->get('success')}}
    </div>
@endif
<div class="content_column">
    <a href="{{ route('categories.create') }}" class="product-add">Добавить категорию</a>
    @foreach($data->product as $prod)
        <div class="product_item categoty-item">
            <div>
                <h2>{{$prod->name}}</h2>
                <br><br>
                <a href="{{route('categories.edit',$prod->id)}}">Редактировать</a>
                <br><br>
                <form action="{{route('categories.destroy',$prod->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
