@extends ('layouts.master')
@section('title','Новости')
@section ('content')

    <div class="container mt-5 mb-5">
        <div class="row mt-5">
            <div class="col-12 col-lg-4 col-md-12 col-12 mb-sm-4">
                <div class="tab">
                    <button id="defaultOpen" class="tablinks btn-secondary" onclick="openPost(event, 'news')">Новости</button>
                    <button class="tablinks btn-secondary" onclick="openPost(event, 'events')">События</button>
                    <button class="tablinks btn-secondary" onclick="openPost(event, 'meetings')">Встречи</button>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-md-12 col-12">
                <div id="news" class="tabcontent">
                    <h2 class="news-title mt-0">Новость 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium animi doloremque omnis pariatur soluta.
                        Beatae blanditiis commodi et hic minima nihil voluptates!
                        Commodi consectetur earum eius, est ratione sint tempore!
                        Accusamus, aliquid consectetur cum delectus deleniti eaque et exercitationem illum impedit,
                        iure magnam magni minima modi necessitatibus nemo nobis perferendis
                        placeat quaerat quisquam quod repellat sapiente sit veritatis voluptate voluptate
                        Cupiditate dolor doloribus id magnam maxime omnis, quod repellat!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque beatae consequatur cumque,
                        deleniti est expedita facere illum ipsum magni minima nemo nostrum odio pariatur quam quis repellat temporibus totam?</p>
                    <p>Alias aliquam autem, corporis doloribus expedita illo incidunt itaque laborum nostrum optio qui, unde, ut voluptas!
                        A, aliquid ducimus est, et, hic modi possimus provident tempora unde voluptates voluptatibus voluptatum.
                    </p>

                    <h2 class="news-title mt-5">Новость 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium animi doloremque omnis pariatur soluta.
                        Beatae blanditiis commodi et hic minima nihil voluptates!
                        Commodi consectetur earum eius, est ratione sint tempore!
                        Accusamus, aliquid consectetur cum delectus deleniti eaque et exercitationem illum impedit,
                        iure magnam magni minima modi necessitatibus nemo nobis perferendis
                        placeat quaerat quisquam quod repellat sapiente sit veritatis voluptate voluptate
                        Cupiditate dolor doloribus id magnam maxime omnis, quod repellat!</p>

                    <h2 class="news-title mt-5">Новость 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium animi doloremque omnis pariatur soluta.
                        Beatae blanditiis commodi et hic minima nihil voluptates!
                        Commodi consectetur earum eius, est ratione sint tempore!
                        Accusamus, aliquid consectetur cum delectus deleniti eaque et exercitationem illum impedit,
                        iure magnam magni minima modi necessitatibus nemo nobis perferendis
                        placeat quaerat quisquam quod repellat sapiente sit veritatis voluptate voluptate
                        Cupiditate dolor doloribus id magnam maxime omnis, quod repellat!</p>
                </div>



                <div id="events" class="tabcontent">

                    <h2 class="event-category mt-0">Событие 1</h2>
                    <a href="#"> <img src="/images/News_Posts/Post1.png" alt="oops" class="events_post mb-3"></a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p>Tokyo is the capital of Japan.Some quick example text to build on the card title and make up the bulk of the card's content.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium animi doloremque omnis pariatur soluta.</p>

                    <h2 class="event-category mt-5">Событие 2</h2>
                    <a href="#"> <img src="/images/News_Posts/Post3.jpg" alt="oops" class="events_post mb-3"></a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>


                <div id="meetings" class="tabcontent">
                    <h2 class="meeting-category mt-0">Встреча с автором</h2>
                    <a href="../pages/Books.html"><img src="../images/Authors/5.png" alt="oops" class="meeting mb-3"></a>
                    <p>Tokyo is the capital of Japan.Some quick example text to build on the card title and make up the bulk of the card's content.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium animi doloremque omnis pariatur soluta.</p>
                    <p>Tokyo is the capital of Japan.Some quick example text to build on the card title and make up the bulk of the card's content.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium animi doloremque omnis pariatur soluta.</p>
                    <p>Tokyo is the capital of Japan.Some quick example text to build on the card title and make up the bulk of the card's content.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium animi doloremque omnis pariatur soluta.</p>

                    <button class="btn btn-danger btn" data-toggle="modal" data-target="#exampleModal">Принять участие</button>

                    <!-- Модальное окно -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Регистрация участников</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="contactForm" action="#" method="post">
                                        <div class="form-group">
                                            <label for="name">Ваше имя:</label>
                                            <input id="name" class="form-control" name="name" required type="text" placeholder="Иванов Иван Иванович">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Ваш E-mail:</label>
                                            <input id="email" class="form-control" name="email" required type="text" placeholder="ivanov@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Ваш телефон:</label>
                                            <input id="phone" class="form-control" name="phone" required type="text" placeholder="+7 (000) 000-00-00">
                                        </div>
                                        <div class="form-group">
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
    </div>

@endsection
<?php

?>