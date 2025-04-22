<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // フォーム表示
    public function index()
    {
        return view('index');
    }

    // 確認画面表示
    public function confirm(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
        'last_name' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'email' => 'required|email',
        'tel1' => 'required|digits_between:1,5',
        'tel2' => 'required|digits_between:1,5',
        'tel3' => 'required|digits_between:1,5',
        'address' => 'required|string|max:255',
        'inquiry_content' => 'required|string',
    ]);
        
        // 入力された内容をセッションに保存
        $request->session()->put('contact_inputs', $request->all());

        // 確認画面に遷移
        return view('contact.confirm', [
            'inputs' => $request->all(),
        ]);
    }

    // 送信処理
    public function submit(Request $request)
    {
        // セッションからデータを取得
        $data = $request->session()->get('contact_inputs');

        // ここでデータを保存したり、メールを送信する処理を追加
        // 例: DB保存やメール送信

        // セッションを削除
        $request->session()->forget('contact_inputs');

        // 完了画面へリダイレクト
        return view('contact.thanks');
    }

    public function store(Request $request)
{
    // バリデーションなど必要であればここに追加
    return redirect()->route('contact.confirm')->withInput();
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
