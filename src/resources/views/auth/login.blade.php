@extends('layout.layout')

@section('title')Авторизация@endsection

@section('main_content')
<body class="text-center">
<div class="container-md flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <h1 class="p-3 text-center">Пожалуйлуста войдите в аккаунт</h1>
    <main class="form-signin text-dark container-md w-25 ">
        <form action="{{route("login_process")}}" method="post">
            @csrf
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                <p class="text-warning">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <p class="text-warning">{{$message}}</p>
                @enderror
            </div>

            <div class="checkbox mb-3 text-white">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
        </form>
    </main>
</div>
</body>
@endsection
