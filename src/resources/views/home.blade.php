@extends('layout.layout')

@section('title')Главная Страница@endsection

@section('main_content')
    <div class="carousel slide" data-ride="carousel" id="slides">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1" class="active"></li>
            <li data-target="#slides" data-slide-to="2" class="active"></li>

        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide-1.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">hello lol</h1>
                    <h3>no no no</h3>
                    <button class="btn btn-outline-light btn-lg">Посмотреть</button>
                    <button class="btn btn-warning btn-lg">Посмотреть</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide-2.jpg">
            </div>
            <div class="carousel-item">
                <img src="img/slide-3.jpg">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam assumenda autem cum,
                    debitis ducimus ea esse ex facilis fuga, illo ipsam laboriosam maxime molestiae mollitia nam nihil
                    perspiciatis quae qui repellat sunt tenetur vitae? Atque cum, ducimus ea iusto natus officiis omnis,
                    possimus qui recusandae sed soluta, vero. Aut autem blanditiis est illo suscipit velit? Libero magnam
                    possimus veritatis.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="#">
                    <button class="btn btn-success btn-xl" type="button">Наступний текст</button>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row alert">
            <div class="col-12 text-center">
                <h1 class="display-5">Заголовок другого тексту</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid amet architecto
                    delectus dolor dolorem doloremque eligendi fugit in labore laudantium maxime, molestiae omnis pariatur
                    placeat possimus quidem quisquam recusandae reiciendis sapiente sed sunt suscipit tempora temporibus
                    voluptates? Adipisci animi consectetur consequuntur esse eveniet fugiat fugit libero nisi perspiciatis
                    voluptatem.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h3>Bootstrap</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
        </div>
        <hr class="my-4">
    </div>
@endsection
