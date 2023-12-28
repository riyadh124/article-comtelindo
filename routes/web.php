<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/article',[ArticleController::class,'index']);

Route::get('/article/{post:id}',[ArticleController::class,'show']);


Route::get('/dashboard',function(){
    return view('dashboard.index');
});

// Route::get('/article', function () {
//     return view('article',[
//         "title" => "Article",
//     ]);
// });
