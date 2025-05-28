@extends('layouts.app')


@section('css')
<head>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

@section('content')
<div class="admin-content">
  <h2>お問い合わせ一覧</h2>
  <table class="contact-table">
    <thead>
      <tr>
        <th>名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>お問い合わせの種類</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>山田 太郎</td>
        <td>男性</td>
        <td>yamada@example.com</td>
        <td>資料請求</td>
      </tr>
      <tr>
        <td>佐藤 花子</td>
        <td>女性</td>
        <td>satou@example.com</td>
        <td>サポート</td>
      </tr>
      <!-- 以下、繰り返し表示 -->
    </tbody>
  </table>
</div>

