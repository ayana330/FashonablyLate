<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
// Contactフォームの表示
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// フォーム送信処理
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// 確認画面を表示するためのルート（必要な場合）
Route::get('/contact/confirmation', [ContactController::class, 'showConfirmation'])->name('contact.confirmation');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');