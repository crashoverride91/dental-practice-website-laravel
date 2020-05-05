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

//Route  Home 
Route::get('/','FrontendController@homepage') ->name('homepage');

//Route About
Route::get('/team', 'FrontendController@team')->name('team');

//Route Services 
Route::get('/services', 'FrontendController@services')->name('services');

//Route Technology
Route::get('/technology', 'FrontendController@technology')->name('technology');

//Route Contacts
Route::get('/contacts', 'FrontendController@contacts')->name('contacts');


//Rotta per prendere i dati
Route::post('/contacts/submit', 'FrontendController@submit')->name('submit');
//Rotta di reindirizzamento
Route::get('/contacts/thankyou', 'FrontendController@thankyou')->name('thankyou');



















//Pagina About
Route::get('/infopage', function () {


    $story = "Lorem Picsum Lorem Picsum";
    return view('infopage',['story'=>$story]);
})->name('infopage');






Route::get('/courses', function(){

        $courses = ["HTML", "CSS", "PHP","JAVASCRIPT", "DB MySQL", "WEB DESIGN"];
        return view('courses', ["courses" =>$courses]);


})->name('courses');

