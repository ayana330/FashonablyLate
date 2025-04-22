@extends('layouts.admin')

@section('content')
  <h1>Admin</h1>
  <p>管理者専用の情報や操作がここに表示されます。</p>

  <!-- 例えば、最新の問い合わせ情報や統計情報を表示する -->
  <div class="stats">
      <h3>最新の統計情報</h3>
      <p>新規登録数: 150</p>
      <p>最近のお問い合わせ: 30</p>
  </div>
@endsection
