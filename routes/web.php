<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\admin\PageController;

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
    return view('welcome');
});

//route fallback
Route::fallback(function(){
    return "maaf alamat tidak ditemukan";
});

Route::get('/',[PageController::class,'index']);
Route::get('/mahasiswa',[PageController::class,'tampil']);

Route::get('/coba-facade',[PageController::class,'cobaFacade']);

Route::get('/coba-class',[PageController::class,'cobaClass']);