<?php

use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/




// Route::get('/', function () 
// {
//     return view('auth.login');
// });


// Route::get('/check-auth','ApiAuth@checkAuth');


// Route::post('/authenticate','Auth\Login@authenticate')->name('authenticate');

Auth::routes();

// Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/contact-us', 'HomeController@contact_us')->name('contact-us');





Route::fallback(function(){ return redirect('home'); });
// Route to resolve Laravel to Vue Route
// Route::get('/{vue_capture?}', function() 
// {  
// 	// if(\Auth::guest()){
// 	// 	return redirect('login');
// 	// }
//    return view('welcome');
// })->where('vue_capture', '^(?!storage).*$')->where('vue_capture','!=','publica/*')->middleware('auth');









