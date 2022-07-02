<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand"><img src='img/logo.png'></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Головна</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Про нас</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Контакти</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Сервіси</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form>
                        <input type="search" class="form-control form-control-dark" placeholder="Search..."
                               aria-label="Search">
                    </form>
                </li>
                <li class="nav-item">
                    <div class="text-end btn-group">
                        @auth("web")
                            <form method="get" action="{{route("logout")}}">
                                <button type="submit" class="btn btn-dark me-1">Выйти</button>
                            </form>
                        @endauth
                        @guest("web")
                            <form method="get">
                                <button id="login" type="button" class="btn btn-outline- me-1">Войти</button>
                            </form>

                            <form method="get" action="{{route("register")}}">
                                <button type="submit" class="btn btn-warning me-1">Регистрация</button>
                            </form>
                        @endguest
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="hidden_login" class="modal">
    <div id="hidden_login" class="modal-content">
        <h1>Введите данные</h1>
            <form action="{{route("login_process")}}" method="post">
                @csrf
                <label for="floatingInput">Введите почту</label>
                <div>
                    <input style="text-align: center" type="email" name="email" id="floatingInput"
                           placeholder="name@example.com">
                    @error('email')
                    <p class="text-warning">{{$message}}</p>
                    @enderror
                </div>
                <label for="floatingPassword">Введите пароль</label>
                <div>
                    <input style="text-align: center" type="password" name="password" id="floatingPassword"
                           placeholder="Password">
                    @error('password')
                    <p class="text-warning">{{$message}}</p>
                    @enderror
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Запомнить меня?
                    </label>
                </div>

                <button class="w-50 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>

    </div>
</div>
@yield('main_content')
</body>
</html>
