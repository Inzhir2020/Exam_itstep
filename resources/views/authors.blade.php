@extends('layouts.master')
@section('title','Авторы')
@section('content')


    <div class="container mt-5 mb-5">
        <h1 class="mt-5">Наши авторы</h1>
            <div class="authors">
                    @foreach($authors as $author)
                    <div class="row no-gutters d-flex justify-content-between" >
                        <div class="col-md-2 pr-3 pb-3 pt-3 pl-0">
                            <img src="{{$author->image}}" class="card-img-top float-left" alt="oops">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{$author->name}}</h5>
                        <p class="card-text">{{$author->description}}</p>
                            </div>
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