@extends('layouts.master')
@section('title', 'Все жанры')
@section('content')

    <div class="container mt-5">
        <div class="row mt-5 mb-5">
            <div class="col-lg-4">
            <nav class="nav flex-column">
                @foreach($genres as $genre)
                    <a class="nav-link active" href="{{$genre->code}}">
                        <h5>{{$genre->name}} </h5>
                    </a>
                    <hr>
                    @endforeach
            </nav>
            </div>
            <div class="col-lg-8">
            <img src="{{asset('/images/janko-ferlic-specialdaddy-sfL_QOnmy00-unsplash.jpg')}}" alt="oops">
            </div>
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