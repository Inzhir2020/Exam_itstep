@extends('layouts.master')
@section('title', 'Оформление заказа' )
@section('content')

    <div class="container">
        <div class="starter-template">
            <h1>Подтвердите заказ:</h1>
            <div class="container">
                <div class="row justify-content-start">
                    <p class="mt-3 mb-3">Общая стоимость заказа:
                        <b>{{$order->getFullPrice()}} руб.</b>
                    </p>

                    <form action="{{route('cart-confirm')}}" method="POST">
                        <br>
                            <p class="mt-5"> Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>

                            <div class="container">
                                <div class="form-group">
                                        <input type="text" name="name" id="name"  placeholder="Введите Ваше имя" class="form-control" required autofocus>
                                    <br>
                                        <input type="text" name="phone" id="phone"  placeholder="Введите номер телефона" class="form-control" required>
                                </div>
                            <br>
                            <input type="submit" class="btn btn-success" value="Подтвердить заказ">
                            </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection