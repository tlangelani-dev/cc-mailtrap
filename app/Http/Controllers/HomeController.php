<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Alex';

        Mail::send('emails.tasks', ['name' => $name], function($message) {
            $message->to('mbowenit@gmail.com', 'Tlangelani Mboweni')
                ->subject('You are now subscribed!');
        });
    }
}
