@extends('layouts.master')
@section('title', 'Корзина' )
@section('content')

    <div class="container mt-5 mb-5">
            <h1>Корзина</h1>
            <p>Оформление заказа</p>
            <div class="panel">
                <table class="table table-striped">
                    <tr>
                        <th>Название</th>
                        <th>Количество</th>
                        <th>Цена</th>
                        <th>Стоимость</th>
                    </tr>

                    @foreach($order->products as $product)
                    <tr>
                        <td>
                            <a href="{{route('product', [$product->genre->code, $product->code])}}">
                                <img class= "polaroid" src="{{$product->image}}">
                               {{$product->name}}
                            </a>
                        </td>
                        <td><span class="badge">{{$product->pivot->count}}</span>
                            <div class="btn-group form-inline">
                                <form action="{{route('cart-remove', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-danger">
                                        <span class="badge badge-danger">&#8722;</span>
                                    </button>

                                    @csrf
                                </form>

                                <form action="{{route('cart-add', $product)}}" method="POST">
                                <button type="submit" class="btn btn-success">
                                    <span class="badge badge-success">&#43;</span>
                                </button>

                                    @csrf
                                    </form>

                            </div>
                        </td>
                   <td>{{$product->price}}</td>
                        <td>{{$product->getPriceForCount()}}</td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="3">Общая стоимость:</td>
                        <td>{{$order->getFullPrice()}}</td>
                    </tr>
                </table>
                <br>
                <div class="btn-group pull-right" role="group">
                    <a type="submit" class="btn btn-success" href="{{route('cart-place')}}">Оформить заказ</a>
                </div>
            </div>
        </div>
@endsection





