<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact; // Contactモデルのインポート
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index(Request $request) // index メソッドを定義
   {
        // 検索条件の取得
        $query = Contact::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        if ($request->filled('contact_type')) {
            $query->where('contact_type', 'like', '%' . $request->contact_type . '%');
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', '=', $request->date);
        }

        // 検索結果を取得
        $contacts = $query->get();

        return view('admin.contacts.index', compact('contacts'));
    }
}
