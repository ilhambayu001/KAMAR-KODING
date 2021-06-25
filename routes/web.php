<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// admin/pengguna login
Route::get('redirects',[IndexController::class,'index']);

//------------------------------------admin------------------------------------------------//
// ::::::::::::::::::::::::::::::::::: Data Pengguna ::::::::::::::::::::::::::::::::::::: //
//admin akses fitur list pengguna
Route::get('redirects/listpengguna',[AdminController::class,'listpengguna']);
Route::put('redirects/listpengguna',[AdminController::class,'updatepengguna']);
Route::delete('redirects/listpengguna',[AdminController::class,'destroypengguna']);
//admin akses fitur list order
Route::get('redirects/listorder',[AdminController::class,'listorder']);
Route::put('redirects/listorder',[AdminController::class,'updateorder']);
Route::delete('redirects/listorder',[AdminController::class,'destroyorder']);
//admin akses fitur list pembayaran
Route::get('redirects/listpembayaran',[AdminController::class,'listpembayaran']);
Route::delete('redirects/listpembayaran',[AdminController::class,'destroypembayaran']);
// ::::::::::::::::::::::::::::::::::: Kontrol Kelas ::::::::::::::::::::::::::::::::::::: //
//admin akses fitur List Kelas
Route::get('redirects/listkelas',[AdminController::class,'listkelas']);
Route::post('redirects/listkelas', [AdminController::class,'storekelas']);
Route::put('redirects/listkelas',[AdminController::class,'updatekelas']);
Route::delete('redirects/listkelas',[AdminController::class,'destroykelas']);
//admin akses fitur tambah kelas pengguna
Route::get('redirects/tambahkelas',[AdminController::class,'tambahkelas']);
Route::post('redirects/tambahkelas', [AdminController::class,'addkelas']);
//admin akses fitur list materi
Route::get('redirects/listmateri',[AdminController::class,'listmateri']);
Route::post('redirects/listmateri', [AdminController::class,'storemateri']);
Route::put('redirects/listmateri',[AdminController::class,'updatemateri']);
Route::delete('redirects/listmateri',[AdminController::class,'destroymateri']);
//admin akses fitur list modul
Route::get('redirects/listmodul',[AdminController::class,'listmodul']);
Route::post('redirects/listmodul', [AdminController::class,'storemodul']);
Route::put('redirects/listmodul',[AdminController::class,'updatemodul']);
Route::delete('redirects/listmodul',[AdminController::class,'destroymodul']);
//admin akses fitur list exams
Route::get('redirects/listexams',[AdminController::class,'listexams']);
Route::post('redirects/listexams', [AdminController::class,'storeexams']);
Route::put('redirects/listexams',[AdminController::class,'updateexams']);
Route::delete('redirects/listexams',[AdminController::class,'destroyexams']);
//admin akses fitur crud quiz
Route::get('redirects/{id}/quiz',[AdminController::class,'quiz']);
Route::post('/redirects/{id}',[AdminController::class,'storequiz']);
Route::put('/redirects/{id}',[AdminController::class,'updatequiz']);
Route::delete('/redirects/{id}/quiz',[AdminController::class,'destroyquiz']);
//------------------------------------user------------------------------------------------//
// ::::::::::::::::::::::::::::::::::: Pembelian Pengguna ::::::::::::::::::::::::::::::::::::: //
// beli didashboard
Route::post('redirects',[UserController::class,'orderstore']);
// keranjang pembelian user
Route::get('redirects/keranjang',[UserController::class,'keranjang']);
Route::post('redirects/keranjang',[UserController::class,'storekeranjang']);
Route::delete('redirects/keranjang',[UserController::class,'destroykeranjang']);
//materi users
Route::get('redirects/{id}/kelas',[UserController::class,'kelas']);
Route::get('redirects/{id}/exams',[UserController::class,'exams']);