<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    // お問い合わせフォームの表示
    public function showForm()
    {
        return view('contact.form'); // フォームのBladeファイルを返す
    }



    // 確認画面表示
    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all(); // すべて取得

        
        // 入力された内容をセッションに保存
        $request->session()->put('contact_inputs', $inputs);
        
        // セッションの内容を確認
    //dd($request->session()->get('contact_inputs')); // セッションに保存された内容をダンプ
    
        // 確認画面に遷移
        return view('contact.confirm', [
            'inputs' => $inputs]);
    }

    // 送信処理
    public function submit(Request $request)
    {
        // 「戻る」が押された場合、入力画面へリダイレクト（入力値も維持）
       if ($request->input('action') === 'back') {
        return redirect('/')->withInput();
        }
        // セッションからデータを取得
        $data = $request->session()->get('contact_inputs');
        $tel = $data['tel1'] . '-' . $data['tel2'] . '-' . $data['tel3'];

        // ここでデータを保存したり、メールを送信する処理を追加
        // 例: DB保存やメール送信

        Contact::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'tel' => $data['tel1'],$data['tel2'],$data['tel3'],
            'address' => $data['address'],
            'building' => $data['building'],
            'detail' => $data['inquiry_content'],
            'category_id' => $data['inquiry_type'],
        ]);
        
        // セッションを削除
        $request->session()->forget('contact_inputs');
        return view('contact.thanks'); // フォームのBladeファイルを返す

    }

    public function search(Request $request)
    {
    $query = Contact::query();

    // 名前での検索
    if ($request->filled('name')) {
        $query->where(function ($q) use ($request) {
        $q->where('first_name', 'like', '%' . $request->name . '%')
          ->orWhere('last_name', 'like', '%' . $request->name . '%');
    });
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
        $query->where('category_id', $request->contact_type);
    }

    // 日付での検索
    if ($request->filled('date')) {
        $query->whereDate('created_at', $request->date);
    }

    $contacts = $query->get();

    return view('admin.contacts.index', compact('contacts'));
    }
}
