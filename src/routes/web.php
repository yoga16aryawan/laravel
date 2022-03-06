<?php

use App\Http\Controllers\Login;
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
    if (Auth::check()) {
        return view('welcome');
    }

    return redirect("login")->withSuccess('You are not allowed to access');
});

Route::get('login', [Login::class, 'index'])->name('halaman.login');
Route::post('loginproses', [Login::class, 'loginproses'])->name('proses.login');
Route::get('registrasi', [Login::class, 'registrasi'])->name('halaman.registrasi');
Route::post('registrasiproses', [Login::class, 'registrasiproses'])->name('proses.registrasi');
Route::get('dashboard', [Login::class, 'dashboard'])->name('dashboard');
Route::get('logout', [Login::class, 'logout'])->name('proses.logout');
