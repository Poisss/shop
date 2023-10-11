@extends('layout.layouts')
@section('title','Регистрация')
@section('content')
<div class="content_row">
    <h2>Регистрация</h2>
    <div>
        <form action="{{route('store')}}" method="post" name="login">
            @csrf
            <div class="form_group">
                <input class="input-create" type="text" name="firtsname" placeholder="Введите имя" value="" required>
            </div>
            <div class="form_group">
                <input class="input-create" type="text" name="lastname" placeholder="Введите фамилию" value="" required>
            </div>
            <div class="form_group">
                <input class="input-create" type="text" name="patronymic" placeholder="Введите отчество" value="">
            </div>
            <div class="form_group">
                <input class="input-create" type="radio" name="gender" value="М" required>М
                <input class="input-create" type="radio" name="gender" value="Ж" required>Ж
            </div>
            <div class="form_group">
                <input class="input-create" type="email" name="email" placeholder="Введите email" value="" required>
            </div>
            <div class="form_group">
                <input class="input-create" type="password" name="password" placeholder="Введите пароль" value="" required>
            </div>
            <div class="form_group">
                <input class="input-create" type="password" name="password_confirmation" placeholder="Подтвердите пароль" value="" required>
            </div>
            <div class="form_group">
                <input class="input-create" type="submit"value="Зарегистрироваться">
            </div>
        </form>
    </div>
</div>
@endsection
