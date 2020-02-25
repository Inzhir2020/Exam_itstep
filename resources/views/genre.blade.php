@extends('layouts.master')
@section('title' )@endsection
@section('content')
    <div class="container mt-5 mb-5">

        <div class="catalog">

                @foreach($genre->products as $product)
                <h1> {{$genre->name}}</h1>
            <div class="card mr-4 mt-4">
                <a href="#"><img src="{{$product->image}}" class="card-img-top" alt="oops"></a>
                <div class="card-body">
                    <h6 class="card-title"></h6>
                    <h5 class="card-title">{{$product-> name}}</h5>
                    <p class="card-text">{{$product-> price}} руб.</p>
                    <form action="{{route('cart-add', $product)}}" method="POST">
                    <button type="submit" class="btn btn-secondary btn-sm" role="button">В корзину</button>
                    <a href="{{route('product', [$product->genre->code, $product->code])}}" class="btn btn-light btn-sm" role="button">Подробнее</a>
                        @csrf
                    </form>
                </div>
            </div>
                    @endforeach

                </div>
            </div>

@endsection
<?php
/**
 * Created by PhpStorm.
 * User: Ирина
 * Date: 16.11.2019
 * Time: 21:55
 */
?>