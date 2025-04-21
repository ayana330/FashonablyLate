<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ContactController;

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

// トップページ
Route::get('/', function () {
    return redirect()->route('login');
});

// お問い合わせフォームの表示
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');

// フォーム内容の確認画面（POST）
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

// 確認画面からの送信処理（POST）
Route::post('/contact/send', [ContactController::class, 'submit'])->name('contact.send');

// 送信完了後のサンクスページ
Route::get('/contact/thanks', function () {
    return view('contact.thanks');
})->name('contact.thanks');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// routes/web.php

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard'); // ダッシュボード的なトップページ
    })->name('admin.dashboard');
    Route::get('/contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts.index');
});
