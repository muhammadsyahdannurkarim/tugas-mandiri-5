<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasantriController;
use app\http\Controllers\HomeController; 

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

//Route salam/URL salam
Route::get('/salam',function (){
    return "Assalamu'alaikum Selamat Pagi Dunia";
});

//Route dengen parameter
Route::get('/pegawai/{nama}/{divisi}',function ($nama,$divisi){
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//Route dengan redirect 
Route::get('/kabar',function (){
    return view('kondisi');
});

//Route /mahasantri
Route::get('/mahasantri',[MahasantriController::Class, 'dataMahasantri']
);

//Route hello
Route::get('/hello', function (){
    return view('hello', ['name' => 'Inaya']);
});

//route nilai
Route::get('/nilai', function (){
    return view('nilai');
});

//route daftar nilai
Route::get('/daftarnilai', function () {
    return view('Latihan.daftar_nilai');
});

//route daftar tugas
Route::get('/tugas', function () {
    return view('tugas');
});
//route pramework
Route::get('/phpframework', function (){ 
    return view('layouts.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
