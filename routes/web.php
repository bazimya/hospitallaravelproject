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

Route::get('/', 'AdminController@welcome');
Route::get('/rw', 'AdminController@rw');
Route::get('/fr', 'AdminController@fr');



Route::post('/Attendence', 'AdminController@Attendence');

Route::post('/district','JqueryController@Districtjquery')->name('districts');
Route::post('/Sector', 'JqueryController@Sectorjquery')->name('Sector');
Route::post('/Cell', 'JqueryController@Celljquery')->name('Cell');
Route::post('/village', 'JqueryController@villagejquery')->name('village');
Route::post('/Hall', 'JqueryController@Hall')->name('Hall');
Route::post('/Mess', 'JqueryController@Mess')->name('Mess');

Route::post('/Messlocation', 'JqueryController@Messlocation')->name('Messlocation');
Route::post('/paruwasi', 'JqueryController@paruwasi')->name('paruwasi');



Auth::routes();
// Route::get('register', function () {
//     return abort(404);
// });

Route::group(['middleware'=> ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('newuser', 'AdminController@index');
    Route::get('/Attended', 'HomeController@Attended');
    Route::get('bonaurutonde/{id}', 'HomeController@bonaurutonde');
    // Route::get('/InserMess', 'HomeController@InserMess');
    Route::get('/Insertchurch', 'HomeController@Insertchurch');
    Route::get('/InserHall','HomeController@inserHall');
    Route::get('/InsertMess', 'HomeController@InsertMess');
    Route::post('/CreateService','AdminController@CreateService');
    Route::Post('/NewChurch', 'AdminController@NewChurch');
    Route::get('/Approve/{id}', 'AdminController@Approve');
    Route::get('/checkcode', 'AdminController@checkcode');
    Route::post('/Createhall', 'AdminController@Createhall');

    Route::post('Searchcode','JqueryController@Searchcode')->name('Searchcode');

    Route::post('/ChangeStutas', 'AdminController@ChangeStutas');
    Route::get('/creareuser','AdminController@creareuser');
    Route::post('/Enternew','AdminController@Enternew');
     Route::any('/Consertation/{id}', 'AdminController@Consertation');
     Route::post('/postconsultation', 'AdminController@postconsultation');




});




