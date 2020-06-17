<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    //
    public function store(){

       $message= request()->validate([
            'name'      =>'required',
            'subject'   =>'required',
            'email'     =>'required|email',
            'content'   =>'required'
        ],[
            'name.required'=>'el nombre es Obligatorio'
        ]);

        //Enviar mail
        //        Mail::to('jhonatanrojasmd@gmail.com')->send(new MessageReceived($message));

        Mail::to('jhonatanrojasmd@gmail.com')->queue(new MessageReceived($message));
        return  back()->with('status','recibimos tu mensaje te responderemos en menos de 24 horas');
    }
}
