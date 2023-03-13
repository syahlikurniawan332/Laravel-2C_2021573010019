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

// membuat route
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/profile/coba', function () {
    echo '<h2 style = "text-align: center"><u>Wellcome Profil Coba</u></h2>';
});

//route parameter 
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

//route parameter dengan 2 parameter 
Route::get('/stok_barang{jenis}/{merek}', function ($jenis,$merek) {
    return "cek sisa stok untuk $jenis $merek";
});

Route::get('/stok_barang{jenis}/{merek}', function ($a,$b) {
    echo "cek sisa stok untuk $a $b";
});

//route dengan optimal parameter 
Route::get('stok_barang/{jenis?}/{merek?}',function($a='smartphone',$b='samsung'){
    return "cek sisa stok untuk $a $b";
});

//route parameter dengan regular expression
Route::get('/user/{id}',function($id){
    return "tampilkan user dengan id = $id";
});

Route::get('/user/{id}',function($id){
    return "tampilkan user dengan id = $id";
})->where('id','[0-9]+');

Route::get('/user/{id}',function($id){
    return "tampilkan user dengan id = $id";
})->where('id','[A-Z]{2}[0-9]+');

// route redirect
Route::get('hubungi-kami',function(){
    return'<h1>Hubungi-Kami</h1>';
});

Route::redirect('/contact-us','/hubungi-kami');

// route group
Route::get('/admin/mahasiswa',function(){
    return "<h1>Daftar Mahasiswa</>";
});
Route::get('/admin/dosen',function(){
    return "<h1>Daftar Dosen</>";
});
Route::get('/admin/karyawan',function(){
    return "<h1>Daftar Karyawan</>";
});

// route group dengan memanfaatkan method prefix
Route::prefix('/admin')->group(Function(){
    Route::get('/mahasiswa',function(){
        echo "<h1>Daftar Mahasiswa</>";
    });
    Route::get('/admin/dosen',function(){
        return "<h1>Daftar Dosen</>";
    });
    Route::get('/admin/karyawan',function(){
        return "<h1>Daftar Karyawan</>";
    });
});

//route fallback
Route::fallback(function(){
    return "maaf alamat tidak ditemukan";
});

//route prioritas
Route::get('/buku/1',function(){
    return "Buku ke-1";
});
Route::get('/buku/1',function(){
    return "Buku saya ke-1";
});
Route::get('/buku/1',function(){
    return "Buku kita ke-1";
});

//route prioritas pake route parameter
Route::get('/buku/{a}',function($a){
    return "Buku ke-$a";
});
Route::get('/buku/{b}',function($b){
    return "Buku saya ke-$b";
});
Route::get('/buku/{c}',function($c){
    return "Buku kita ke-$c";
});

//route prioritas pake tanpa forward slash (/)
Route::get('mahasiswa/andi',function(){
    echo "halaman mahasiswa andi";
});

// Jobsheet 2
//route web.php
Route::get('/home',function(){
    return view("home");
});

Route::get('/mahasiswa',function(){
    return View::make('mahasiswa');
});

//strutur view
Route::get('/mahasiswa',function(){
    return view("kampus.mahasiswa");
});

Route::get('/mahasiswa',function(){
    return view("kampus/mahasiswa");
});

// mengirim data ke view sebagai argument
Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa',["mahasiswa01"=>"maulana sultansyah"]);
});

// mengirim data lebih banyak
Route::get('/mahasiswa',function(){
    $arrmahasiswa=[
    "mahasiswa01"=>"maulana sultansyah",
    "mahasiswa02"=>"maulana sultansyah",
    "mahasiswa03"=>"maulana sultansyah",
    "mahasiswa04"=>"maulana sultansyah"
    ];
return view('kampus.mahasiswa',$arrmahasiswa);
});

Route::get('/mahasiswa',function(){
return view('kampus.mahasiswa')
->with('mahasiswa01','Doni sadikin')
->with('mahasiswa02','syadzwina')
->with('mahasiswa03','deliana putri');
});

// jobshet 3

// blade template engine
Route::get('/mahasiswa',function(){
    $nama='john paijo simatupang';
    $nilai=75;
    return view('kampus.jobshet3.mahasiswa',compact('nama','nilai'));
});

Route::get('/mahasiswa',function(){
    $nama='<u>Elon Musk Batubara</u>';
    $nilai=75;
    return view('kampus.jobshet3.mahasiswa',compact('nama','nilai'));
});

// // kondisi if else
Route::get('/mahasiswa',function(){
    $nama='Elon Musk Batubara';
    $nilai=75;
    return view('kampus.jobshet3.mahasiswa',compact('nama','nilai'));
}); 

// // perulangan foreach 
Route::get('/mahasiswa',function(){
    $nama='Vladimir Putin Harahap';
    $nilai=[80,30,64,76,95];
    return view('kampus.jobshet3.mahasiswa',compact('nama','nilai'));
});

// //perintah continue dan break
Route::get('/mahasiswa',function(){
    $nama='Tya Kirana Putri';
    $nilai=[80,64,30,76,95];
    return view('kampus.jobshet3.mahasiswa',compact('nama','nilai'));
});