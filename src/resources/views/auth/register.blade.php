@extends('layout.layout')

@section('title')Регистрация@endsection

@section('main_content')
    <h1 class="p-3 text-center">Введите даные для регистрации</h1>
    <div class="container-md w-25">
        <form method="post" action="{{route("register_process")}}" >
            @csrf
            <input type="text" name="name" placeholder="введите имя" class="form-control"><br>
            @error('name')
            <p class="text-warning">{{$message}}</p>
            @enderror

            <input type="email" name="email" placeholder="введите email" class="form-control"><br>
            @error('email')
            <p class="text-warning">{{$message}}</p>
            @enderror

            <input type="password" name="password" placeholder="введите пароль" class="form-control"><br>
            @error('password')
            <p class="text-warning">{{$message}}</p>
            @enderror

            <input type="password" name="password_confirmation" placeholder="повторите пароль" class="form-control"><br>
            @error('password_confirmation')
            <p class="text-warning">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-success">Зарегистрироватся</button>
        </form>
    </div>
@endsection
