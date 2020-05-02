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

//Rotta Home Welcome 2
Route::get('/','FrontendController@homepage') ->name('homepage');

//Rotta About
Route::get('/team', 'FrontendController@team')->name('team');

//Rotta Services 
Route::get('/services', 'FrontendController@services')->name('services');

//Rotta Technology
Route::get('/technology', 'FrontendController@technology')->name('technology');

//Rotta Contacts
Route::get('/contacts', 'FrontendController@contacts')->name('contacts');

Route::get('/navbar', 'FrontendController@navbar')->name('navbar');














//Pagina About
Route::get('/infopage', function () {


    $story = "Lorem Picsum Lorem Picsum";
    return view('infopage',['story'=>$story]);
})->name('infopage');






Route::get('/courses', function(){

        $courses = ["HTML", "CSS", "PHP","JAVASCRIPT", "DB MySQL", "WEB DESIGN"];
        return view('courses', ["courses" =>$courses]);


})->name('courses');

