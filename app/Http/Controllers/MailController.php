<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function index(Request $request){


        $data = $request->all();
        /*dd($data);*/ //array email, token
        /*$email = $data['email'];*/


    Mail::send('mails.mail',['data'=>$data], function($message) use($data){

           $message->to(env('MAIL_FROM_ADDRESS'),'Subscription Letter')->subject('Subscription Letter');

            $message->from(env('MAIL_USERNAME'), 'InzhirPublishing');
        });
            return redirect()->back()->with('status', 'Вы успешно подписаны!');


    }
}
