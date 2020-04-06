<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TestController@index');
Route::get('wel','TestController@welcome');
Route::get('ticket','TestController@CreateTicket');
Route::post('createTicket','TicketsController@CreateTicket');
Route::get('ticket/{id}',function ($id){
    $ticket = App\ticket::find($id);
    return view('test.show',compact('ticket'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
