@extends('layout.layouts')
@section('title','Admin')
@section('content')
<div class="content_row">
    <div class="content_column">
        <h2>Добавление товара</h2>
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="form_group">
                <input type="text" name="name" placeholder="Введите название" value="" required>
            </div>
            <div class="form_group">
                <input type="number" name="price" placeholder="Введите стоимость" value="" required>
            </div>
            <div class="form_group">
                <input type="number" name="qty" placeholder="Введите количество" value="" required>
            </div>
            <div class="form_group">
                <input type="text" name="description" placeholder="Введите описание" value="">
            </div>
            <select name="category_id" id="">
                <option disabled selected>Выберите категорию</option>
                @foreach ($category as $categ)
                    <option value="{{$categ->id}}">
                        {{$categ->name}}
                    </option>
                @endforeach
            </select>
            <div class="form_group">
                <input type="submit"value="Добавить">
            </div>
        </form>
    </div>
</div>
@endsection
