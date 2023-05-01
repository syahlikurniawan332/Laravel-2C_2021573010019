<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

//mahasiswa
Route::get('mahasiswa',function (){
    $arrMahasiswa = ["Luhut Panjaitan","Jokowi","Vladimir Putin","Lisa Permata"];
    return view('jobshet4.mahasiswa')->with('mahasiswa',$arrMahasiswa);
});

//dosen
Route::get('dosen',function (){
    $arrDosen = ["Maya Fitrianti, M.M.","Prof.Silvia Nst, M.Farm.","Dr. Umar Agustinus","Dr. Syahrial, M.Kom."];
    return view('jobshet4.dosen')->with('dosen',$arrDosen);
});

//gelery
Route::get('gallery',function (){
    return view('jobshet4.gallery');
});