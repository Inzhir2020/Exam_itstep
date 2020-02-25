<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Product;
use App\Author;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){


        return view ('index');
    }


    public function sub(Request $request)
    {
        $request = get()->input('name');
        dd($request);
    }

    public function books(){
        $products = Product:: get();
        return view('books', compact('products'));

    }


    public function authors(){
        $authors = Author:: get();
        return view('authors', compact('authors'));

    }

    public function about(){
        return view('about');
    }

    public function news(){
        return view('news');
    }

    public function contacts(){
        return view('contacts');
    }

    public function genres(){
        $genres = Genre::get();
        return view('genres',compact('genres'));
    }


    public function product($product = null){

        $product = Product::get();

        return view('product',compact('product'));
    }


}
