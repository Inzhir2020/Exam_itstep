<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inzhir Publishing : @yield('title')</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery-3-4-1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/awesomefonts.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}" async></script>

</head>

<body>
<div class="content mt-5 mb-5">
<header>
    <div class="container-fluid mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
            <a href="#" class="navbar-brand"><img src="{{asset('images/Logo.jpg')}}" alt="oops">InzhirPublishing</a>
            <div class="d-flex">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ResponsiveNavbar" aria-controls="ResponsiveNavbar"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="ResponsiveNavbar">
                <ul class="navbar-nav mr-auto order-1 d-flex justify-content-around">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('books')}}">Каталог </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('authors')}}">Авторы</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('news')}}">Новости</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contacts')}}">Контакты</a></li>
                </ul>
                <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                        @if (Route::has('login'))
                                @auth
                            <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout form').submit();" class="nav-link">Выйти</a></li>
                                    <form action="{{ route('logout') }}" method="POST" id="logout form" class="d-none">
                                    @csrf
                                    </form>
                                    {{--<a href="{{Auth::logout()}}">Home</a>--}}
                                @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Вход</a></li>

                                    @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Регистрация</a></li>
                                    @endif
                                @endauth
                        @endif
                    <li class="nav-item"><a class="nav-link" href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
                <ul class="navbar-nav d-lg-none">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item mt-5"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout form').submit();" class="nav-link">Выйти</a></li>
                            <form action="{{ route('logout') }}" method="POST" id="logout form" class="d-none">
                                @csrf
                            </form>
                            {{--<a href="{{Auth::logout()}}">Home</a>--}}
                        @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Вход</a></li>

                            @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Регистрация</a></li>
                            @endif
                        @endauth
                    @endif
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.vk.com"><i class="fab fa-vk"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="container mt-5">
        @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">{{session()->get('warning')}}</p>
            @endif
    </div>
@yield('content')

<footer class="footer mt-5">
    <div class="container text-center text-md-left justify-content-md-between">
        <div class="row">
            <div class="col-md-2 col-lg-3 mr-auto my-md-4 mt-4 mb-1">
                <a href="#" class="navbar-brand"><img src="{{asset('images/Logo.jpg')}}" alt="oops">InzhirPublishing</a>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                <ul>
                    <li>
                        <p>
                            <a href="{{route('about')}}">О нас</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="{{route('books')}}">Наши книги</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="{{route('authors')}}">Авторы</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="{{route('news')}}">Новости</a>
                        </p>
                    </li>
                </ul>

            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-home mr-3"></i>г.Новосибирск, ул. Советская, д. 64/1</a>
                    </li>
                    <li>
                        <a href="mailto:ask@htmlbook.ru">
                            <i class="fas fa-envelope mr-3 mt-3"></i> inzhir2019@mail.ru</a>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-phone mr-3 mt-3"></i><a href="tel:+7 (923) 107 65 02">+7 (923) 107 65 02</a></p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-print mr-3"></i><a href="tel:+ 7 383 202 4507"> + 7 383 202 4507</a></p>
                    </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 col-lg-2 text-center text-md-right mx-auto my-4">
                <ul>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com"><i class="fab fa-instagram mr-3"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.vk.com"><i class="fab fa-vk  mr-3"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.twitter.com"><i class="fab fa-twitter  mr-3"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.facebook.com"><i class="fab fa-facebook-f  mr-3"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">
        <i class="far fa-copyright"></i> Copyright: <a href="#">InzhirPublishing</a>
    </div>
</footer>

</div>
</body>
</html>
