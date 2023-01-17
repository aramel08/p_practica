<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use App\Models\Contact;

class MessagesController extends Controller
{
    public function store()
    {

      request()->validate([
          'fullname'=>'required|min:5',
          'email'=>'required|email',
          'number'=>'required|min:7|max:12',
          'content'=>'required|min:5'

         ]);

        return Contact::create([
            'fullname'=>request('fullname'),
            'email'=>request('email'),
            'number'=>request('number'),
            'message'=>request('content'),

        ]);       
        return view('/contact');
       
        

    }
    public function index()
    {
        return view('/contact');
    }

} 
