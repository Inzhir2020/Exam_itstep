@extends ('layouts.master')
@section('title','О нас')
@section('content')

<div class="aboutUs mt-3">

        <img src="{{asset('images/alfons-morales-YLSwjSy7stw-unsplash.jpg')}}" alt="oops">


    <div class="container mt-5">
        <div class="row">
            <h3>История компании</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum</p>
        </div>

        <div class="row mt-5">
            <h3>Наши ценности</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>

        <div class="row">
            <div class="col-lg-4 pl-0">
                <div class="icons">
                    <ul class="pl-1">
                        <li><i class="fas fa-business-time"></i>
                            <p>Блестящая репутация и надежность</p>
                        </li>
                        <li><i class="fas fa-users"></i>
                            <p>Сплоченность команды</p>
                        </li>
                        <li><i class="far fa-lightbulb"></i>
                            <p>Инновационность</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 pl-0">
                <div class="icons">
                    <ul class="pl-1">
                        <li><i class="fas fa-business-time"></i>
                            <p>Развитая сеть дистрибуции</p>
                        </li>
                        <li><i class="fas fa-users"></i>
                            <p>Долговременное партнерство с авторами</p>
                        </li>
                        <li><i class="far fa-lightbulb"></i>
                            <p>Социальная ответственность</p>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h3>Наша команда</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="row">
            <div class="card-deck ml-0 mr-0">
                <div class="col col-lg-3 col-md-4 col-sm-6 pl-0 mb-2 mt-2">
                    <div class="card ml-0">
                        <img src="{{asset('images/Our_Team/Em1.jpg')}}" class="card-img-top" alt="oops">
                        <div class="card-body">
                            <h5 class="card-title">Гришков Павел</h5>
                            <p class="card-text">Генеральный директор</p>
                            <div class="card-footer">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-4 col-sm-6 pl-0 mb-2 mt-2">
                    <div class="card ml-0">
                        <img src="{{asset('images/Our_Team/Em2.jpg')}}" class="card-img-top" alt="oops">
                        <div class="card-body">
                            <h5 class="card-title">Курунян Сергей</h5>
                            <p class="card-text">Заместитель директора</p>
                            <div class="card-footer">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3 col-md-4 col-sm-6 pl-0 mb-2 mt-2">
                    <div class="card ml-0">
                        <img src="{{asset('images/Our_Team/Em4.jpg')}}" class="card-img-top" alt="oops">
                        <div class="card-body">
                            <h5 class="card-title">Горская Татьяна</h5>
                            <p class="card-text">Финансовый директор</p>
                            <div class="card-footer">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-4 col-sm-6 pl-0 mb-2 mt-2">
                    <div class="card ml-0">
                        <img src="{{asset('images/Our_Team/Em5.jpg')}}" class="card-img-top" alt="oops">
                        <div class="card-body">
                            <h5 class="card-title">Татьяна Плюта</h5>
                            <p class="card-text">Креативный директор</p>
                            <div class="card-footer">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


<?php

?>