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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);
Route::get('lang/{locale}',function($lang){
    \Session::put('locale',$lang);
    return redirect()->back();
});
Route::group(['middleware'=>'language'],function () {
    //Frontend
    Route::get('page/{slug}','PageController@front');
    //Admin Panel
    Route::group(['middleware'=>'auth'],function () {
        Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
        Route::resource('article','ArticleController');
        Route::resource('page','PageController');
    });
});
