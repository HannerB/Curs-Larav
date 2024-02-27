<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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

Route::get('/', function(){
    return view('welcome');
});

// Route::get("/esperar", function(){
//     return view("nuevavista");
// });

Route::get('/saludo/{nombre}', function($nombre){
    return "hola, $nombre";
});

Route::get('/usuarios', [UserController::class, 'index']);

Route::get('/libros', [BookController::class,'index']);

// route::view('/', 'welcome', ['mensaje' => 'este es un mensaje random']);
