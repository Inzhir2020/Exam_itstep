@extends ('layouts.master')
@section('title','Каталог')
@section('content')

<div class="container mt-5 mb-5">
        <h1 class="mt-4">Все книги</h1>
<div class="catalog">
        @foreach($products as $product)

                        <div class="card mr-4 mt-4">
                            <a href="#"><img src="{{$product->image}}" class="card-img-top" alt="oops"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{$product-> name}}</h5>
                                <p class="card-text">{{$product-> price}} руб.</p>
                                <form action="{{route('cart-add', $product)}}" method="POST">
                                <button type="submit" class="btn btn-secondary btn" role="button">В корзину</button>
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
 * Time: 21:42
 */
?>