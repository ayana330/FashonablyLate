@extends('layouts.admin')

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
      @foreach($contacts as $contact)
      <tr>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->gender === 'male' ? '男性' : '女性' }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->contact_type }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
