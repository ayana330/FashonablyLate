<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // お問い合わせフォームの表示
    public function showForm()
    {
        return view('contact.form'); // フォームのBladeファイルを返す
    }



    // 確認画面表示
    public function confirm(Request $request)
    {
        $inputs = $request->all(); // すべて取得

        // バリデーション
        $validated = $request->validate([
        'last_name' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'email' => 'required|email',
        'tel1' => 'required|digits_between:1,5',
        'tel2' => 'required|digits_between:1,5',
        'tel3' => 'required|digits_between:1,5',
        'address' => 'required|string|max:255',
        'building' => 'nullable|string|max:255',
        'inquiry_type' => 'required|string',
        'inquiry_content' => 'required|string',
        ]);
        
        // 入力された内容をセッションに保存
        $request->session()->put('contact_inputs', $inputs);
        
        // セッションの内容を確認
    dd($request->session()->get('contact_inputs')); // セッションに保存された内容をダンプ
    
        // 確認画面に遷移
        return view('contact.confirm', [
            'inputs' => $inputs]);
    }

    // 送信処理
    public function submit(Request $request)
    {
        // 「戻る」が押された場合、入力画面へリダイレクト（入力値も維持）
       if ($request->input('action') === 'back') {
        return redirect()->route('contact.form')->withInput();
    }
        // セッションからデータを取得
        $data = $request->session()->get('contact_inputs');

        // ここでデータを保存したり、メールを送信する処理を追加
        // 例: DB保存やメール送信

        // セッションを削除
        $request->session()->forget('contact_inputs');

    }

    public function store(Request $request)
    {
    // バリデーションなど必要であればここに追加
    $request->session()->forget('contact_inputs');
    return redirect()->route('contact.thanks');
    }

    public function search(Request $request)
    {
    $query = Contact::query();

    // 名前での検索
    if ($request->filled('name')) {
        $query->where('name', 'like', '%' . $request->name . '%');
    }

    // メールアドレスでの検索
    if ($request->filled('email')) {
        $query->where('email', 'like', '%' . $request->email . '%');
    }

    // 性別での検索
    if ($request->filled('gender')) {
        $query->where('gender', $request->gender);
    }

    // お問い合わせ種類での検索
    if ($request->filled('contact_type')) {
        $query->where('contact_type', $request->contact_type);
    }

    // 日付での検索
    if ($request->filled('date')) {
        $query->whereDate('created_at', $request->date);
    }

    $contacts = $query->get();

    return view('admin.contacts.index', compact('contacts'));
    }
}
