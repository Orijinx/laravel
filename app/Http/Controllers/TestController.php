<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){

      return view('test.main');
    }
    public function welcome(){
        return view('welcome');
    }
    public function CreateTicket(){
        return view('test.ticket');
    }
}
