<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    //


    protected function CreateTicket(Request $request)
    {
//        $title = Request::input('title');
//        $body = Request::input('body');
//        $idUser = Request::input('id');
            $tick = new ticket;
            $tick->title = $request->title;
            $tick->body = $request->body;
            $tick->userid = Auth::User()->id;
            $tick->save();




       return redirect('/');

    }

    protected $redirectTo = RouteServiceProvider::HOME;
}
