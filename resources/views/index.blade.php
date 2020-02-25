@extends ('layouts.master')
@section('title','Главная')
@section ('content')

<div class="content">
<div class="container mt-5">
    <div id="sliders" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#sliders" data-slide-to="0" class="active"></li>
            <li data-target="#sliders" data-slide-to="1"></li>
            <li data-target="#sliders" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="{{asset('images/Banner/Events.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="rectangle">
                        <a href="{{route('news')}}">Узнать подробнее</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{asset('images/Banner/Bestsellers.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="rectangle">
                        <a href="{{route('books')}}">Посмотреть все</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{asset('images/Banner/New_items.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="rectangle">
                        <a href="{{route('books')}}">Перейти в каталог</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#sliders" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#sliders" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="news">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="new-post">
                    <h3 class="post-category">Новости</h3>
                    <h2 class="post-title">
                        <a href="{{route('news')}}">Новости издательства</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium animi doloremque omnis pariatur soluta.
                        Beatae blanditiis commodi et hic minima nihil voluptates!
                        Commodi consectetur earum eius, est ratione sint tempore!
                        Accusamus, aliquid consectetur cum delectus deleniti eaque et exercitationem illum impedit,
                        iure magnam magni minima modi necessitatibus nemo nobis perferendis
                        placeat quaerat quisquam quod repellat sapiente sit veritatis voluptate voluptate
                        Cupiditate dolor doloribus id magnam maxime omnis, quod repellat!
                    </p>
                    <p><a href="{{route('news')}}" class="link-more">Подробнее</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-posts">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset('images/News_Posts/Post1.png')}}" class="card-img-top" alt="oops">
                        <div class="card-body">
                            <h3 class="post-category">Мероприятия</h3>
                            <h6 class="post-title">Название карточки</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p><a href="{{route('news')}}" class="link-more">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset('images/News_Posts/Post3.jpg')}}" class="card-img-top" alt="oops">
                    </div>
                        <div class="card-body">
                            <h3 class="post-category">События</h3>
                            <h6 class="post-title">Название карточки</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p><a href="{{route('news')}}" class="link-more">Подробнее</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="new_books">
<div class="book-posts">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="books-list"><a href="{{route('books')}}">Наши книги</a></h2>
            </div>
        </div>
        <div id="books-slider" class="carousel slide mt-2" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                                <img class="img-fluid d-block" src="{{asset('images/Books/Cat6.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Борис Акунин</h6>
                                    <h5 class="card-title">Не прощаюсь</h5>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                               <img class="img-fluid d-block" src="{{asset('images/Books/Book_2.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Стивен Кинг</h6>
                                    <h5 class="card-title">Доктор Сон</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                               <img class="img-fluid d-block" src="{{asset('images/Books/Book_3.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Стивен Чбоски</h6>
                                    <h5 class="card-title">Воображаемый друг</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                                <img class="img-fluid d-block" src="{{asset('images/Books/Book_4.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Жоэль Диккер</h6>
                                    <h5 class="card-title">Исчезновение Стефани Мейлер</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                                <img class="img-fluid d-block" src="{{asset('images/Books/Book_5.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Гузель Яхина</h6>
                                    <h5 class="card-title">Дети мои</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                               <img class="img-fluid d-block" src="{{asset('images/Books/Book_6.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Алексей Сальников</h6>
                                    <h5 class="card-title">Петровы в гриппе и вокруг него</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                                <img class="img-fluid d-block" src="{{asset('images/Books/Book_7.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Элена Ферранте</h6>
                                    <h5 class="card-title">История о пропавшем ребенке</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                                <img class="img-fluid d-block" src="{{asset('images/Books/Book_8.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Фредрик Бакман</h6>
                                    <h5 class="card-title">Бабушка велела кланяться и передать, что просит прощения</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                                <img class="img-fluid d-block" src="{{asset('images/Books/Book_9.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Фэнни Флэг</h6>
                                    <h5 class="card-title">Жареные зеленые помидорв в кафек "Полустанок"</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                               <img class="img-fluid d-block" src="{{asset('images/Books/Cat.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Хелен Данмор</h6>
                                    <h5 class="card-title">И тогда я солгал</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                                <img class="img-fluid d-block" src="{{asset('images/Books/Cat1.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Терри Пратчетт</h6>
                                    <h6 class="card-title">Нил Гейман</h6>
                                    <h5 class="card-title">Благие знамения</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="card">
                               <img class="img-fluid d-block" src="{{asset('images/Books/Cat2.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">Элизабет Гилберт</h6>
                                    <h5 class="card-title">Город женщин</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#books-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#books-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="authors mt-5">
    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <h2 class="auth-list"><a href="{{route('authors')}}">Наши авторы</a></h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="card">
                    <a href="{{route('authors')}}">
                        <img src="{{asset('images/Authors/1.jpg')}}" class="card-img-top" alt="oops"></a>
                    <p class="card-text">Стивен Кинг</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="card">
                    <a href="{{route('authors')}}">
                        <img src="{{asset('images/Authors/3.png')}}" class="card-img-top" alt="oops"></a>
                    <p class="card-text">Джордж Мартин</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="card">
                    <a href="{{route('authors')}}">
                        <img src="{{asset('images/Authors/4.png')}}" class="card-img-top" alt="oops"></a>
                    <p class="card-text">Дэн Браун</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="card">
                    <a href="{{route('authors')}}">
                        <img src="{{asset('images/Authors/5.png')}}" class="card-img-top" alt="oops"></a>
                    <p class="card-text">Борис Акунин</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="card">
                    <a href="{{route('authors')}}">
                        <img src="{{asset('images/Authors/7.jpg')}}" class="card-img-top" alt="oops"></a>
                    <p class="card-text">Виктор Пелевин</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="card">
                    <a href="{{route('authors')}}">
                        <img src="{{asset('images/Authors/9.png')}}" class="card-img-top" alt="oops"></a>
                    <p class="card-text">Нил Гейман</p>
                </div>
            </div>

        </div>
        <div class="col text-center after-posts mt-3">
            <a href="{{route('authors')}}" class="btn btn-outline-secondary mr-2">Все авторы</a>
            <button class="btn btn-outline-success text" type="submit" data-toggle="modal" data-target="#exampleModal">Хочу стать автором</button>

            <!-- Модальное окно -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Форма для авторов</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="contactForm" action="#" method="POST">
                                <div class="form-group text-left">
                                    <label for="name">Ваше имя:</label>
                                    <input id="name" class="form-control" name="name" required type="text" placeholder="Иванов Иван Иванович">
                                </div>
                                <div class="form-group text-left">
                                    <label for="email">Ваш E-mail:</label>
                                    <input id="email" class="form-control" name="email" required type="text" placeholder="ivanov@gmail.com">
                                </div>
                                <div class="form-group text-left">
                                    <label for="phone">Ваш телефон:</label>
                                    <input id="phone" class="form-control" name="phone" required type="text" placeholder="+7 (000) 000-00-00">
                                </div>
                                <div class="form-group text-left">
                                    <label for="message">Текст сообщения:</label>
                                    <textarea id="message" class="form-control" required name="message" rows="4"></textarea>
                                </div>
                                <div class="form-group form-check">
                                    <input id="check" class="form-check-input ml-0 sticky" checked type="checkbox">
                                    <label class="form-check-label" for="check"> Я добровольно отправляю свои данные</label>
                                </div>
                                <button id="button" class="btn btn-success" type="submit">Отправить</button>
                                <div class="result">
                                    <span id="answer"></span>
                                    <span id="loader" style="display:none"><img src="images/loader.gif" alt=""></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="signup mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Подпишитесь на рассылку</h3>
                        <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 form-input">
                            <input type="email" class="form-control" placeholder="Введите ваш email" name="email">
                            <button class="btn" type="submit"><i class="far fa-hand-point-right"></i></button>
                    @csrf
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
