<?php

use App\Http\Controllers\PageController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::redirect('/', 'https://www.educastudio.com/');
Route::prefix('category')->group(function (){
    Route::redirect('/marbel-edu-games', 'https://www.educastudio.com/category/marbel-edu-games');
    Route::redirect('/marbel-and-friends-kids-games', 'https://www.educastudio.com/category/marbel-edu-games');
    Route::redirect('/riri-story-books', 'https://www.educastudio.com/category/riri-story-books');
    Route::redirect('/kolak-kids-songs', 'https://www.educastudio.com/category/kolak-kids-songs');
});
/*
Route::prefix('news/{id?}')->group(function ($id){
    if($id = null){
        Route::redirect('/', 'https://www.educastudio.com/news');
    }
    if($id = 'berbagi'){
        Route::redirect('/berbagi', 'https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19');
    }
    
});*/


Route::prefix('news/{id?}')->group(function ($id = null){
    Route::redirect('/', 'https://www.educastudio.com/news');
    //Route::redirect('/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19', 'https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19');
});
Route::prefix('news/{name?}')->group(function ($name = 'berbagi'){
    //Route::redirect('/', 'https://www.educastudio.com/news');
    Route::redirect('/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19', 'https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19');
});
Route::prefix('program')->group(function (){
    Route::redirect('/karir', 'https://www.educastudio.com/program/karir');
    Route::redirect('/magang', 'https://www.educastudio.com/program/magang');
    Route::redirect('/kunjungan-industri', 'https://www.educastudio.com/program/kunjungan-industri');
});