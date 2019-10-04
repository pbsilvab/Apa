<?php
use App\Events\UserSignedUp;

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

Route::get('/', function () {
    return view('front.app');
});
Route::get('/pod', function(){
    event(new UserSignedUp('john doe'));
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('notify/index', 'NotificationController@index');
Route::get('contacts', 'NotificationController@contacts');
Route::get('conversation/{id}', 'NotificationController@messages');
Route::post('conversation/send', 'NotificationController@savemessages');


