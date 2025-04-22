<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ログイン画面を表示
    public function showLoginForm()
    {
        return view('auth.login'); // resources/views/auth/login.blade.php を表示
    }

    // ログイン処理
    public function login(Request $request)
    {
        // バリデーション
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // 認証
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // セッション再生成（セキュリティ対策）

            return redirect()->intended(route('admin.dashboard')); // 管理画面にリダイレクト
        }

        // 認証失敗時
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->withInput(); // 入力内容を保持してリダイレクト
    }

    // ログアウト処理
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();     // セッション無効化
        $request->session()->regenerateToken(); // CSRFトークン再生成

        return redirect()->route('login'); // ログイン画面にリダイレクト
    }
}
