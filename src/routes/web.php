<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [ContactController::class, 'showForm']);

// フォーム内容の確認画面（POST）
//Route::get('/contact', [ContactController::class, //'showForm'])->name('contact.form');

Route::post('/confirm', [ContactController::class, 'confirm']);
// 確認画面からの送信処理（POST）
Route::post('/send', [ContactController::class, 'submit']);

// 送信完了後のサンクスページ
Route::get('/contact/thanks', function () {
    return view('contact.thanks');
})->name('contact.thanks');

// お問い合わせのデータ登録（POST）
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// 認証が必要な管理画面
Route::prefix('admin')->middleware('auth')->group(function () {
    // ダッシュボード
    Route::get('/', function () {
        return view('admin.dashboard'); // ダッシュボード的なトップページ
    })->name('admin.dashboard');

    // お問い合わせ一覧
    Route::get('/contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts.index');
});

// ユーザー登録ページの表示と処理
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// ログインページの表示
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');

// ログアウト処理
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts.index');
});
Route::get('/admin/contacts/search', [ContactController::class, 'search'])->name('contacts.search');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

