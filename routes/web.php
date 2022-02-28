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