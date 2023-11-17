@extends('layout.layouts')
@section('title','Товары')
@section('content')
<nav class="filtr">
    <a href="sort/1/name">По наименованию</a>
    <a href="sort/1/price">По цене</a>
    <a href="sort/1/price">По новизне</a>
    <select name="select_filtr" class="categoty" id="" onchange="filtr(event)">
        <option value="Все" selected>Все</option>
        @foreach ($data->category as $categ)

            <option value="{{$categ->name}}">
                {{$categ->name}}
            </option>
        @endforeach
    </select>
</nav>
@if ($data->role=='admin')
<a href="{{ route('products.create') }}" class="product-add">Добавить товар</a>
@endif
@if(session()->has('success'))
    <div class="content_row" style="color: green">
        {{session()->get('success')}}
    </div>
@endif
<div class="content_column">
    @foreach($data->product as $prod)
    <a href="/products/{{$prod->id}}">
        <div class="product_item product_item-block">
            <div>
                <img src="{{asset('public/'.$prod->image)}}" alt="{{$prod->name}}" class="product_img">
                <h2>{{$prod->name}}</h2>
                <h3>{{$prod->price}} ₽</h3>
            </div>
        </div>
    </a>
    @endforeach
</div>
<script>
    let category=document.querySelector('.categoty')
    category.addEventListener('change',(e)=>{
        $.ajax({
        url: 'http://shop/sort/1/',
        method: 'post',
        dataType: 'html',
        data: {text: 'Текст'},
        success: function(data){
        console.log(data);
    }
});
    })
</script>
@endsection
