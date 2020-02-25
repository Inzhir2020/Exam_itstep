@extends ('layouts.master')
@section('content')

@foreach($product as $products)
    <div class="book_page mt-5 mb-5">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-2 p-0 m-0">
                    <div class="card">
                        <img class="card-img-top" src="{{$products->image}}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title pt-2">{{$products->name}}</h6>
                            <span class="price">{{$products->price}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0 m-0 ml-5">
                    <div class="card">
                        <p class="card-text">{{$products->description}}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
<?php
?>