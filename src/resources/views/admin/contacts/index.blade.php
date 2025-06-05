@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('content')
  <h1>Admin</h1>

<form action="{{ route('admin.contacts.index') }}" method="GET" class="search-form">
    <div class="flex">
        <input class="serch-form__keyword-input" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{request('keyword')}}">
    <!--  
    <div class="search-form__group">
        <input type="text" id="name" name="name" value="{{ request('name') }}" class="search-form__input" placeholder="名前を入力">
    </div>

    <div class="search-form__group">
        <input type="email" id="email" name="email" value="{{ request('email') }}" class="search-form__input" placeholder="メールアドレスを入力">
    </div>-->

    <div class="search-form__group">
        <select id="gender" name="gender" class="search-form__input">
            <option value="">性別</option>
            <option value="male" {{ request('gender') == 'male' ? 'selected' : '' }}>男性</option>
            <option value="female" {{ request('gender') == 'female' ? 'selected' : '' }}>女性</option>
        </select>
    </div>

    <div class="search-form__group">
        <select id="contact_type" name="contact_type" class="search-form__input">
            <option value="">お問い合わせの種類</option>
            <option value="general" {{ request('contact_type') == 'general' ? 'selected' : '' }}>一般</option>
            <option value="support" {{ request('contact_type') == 'support' ? 'selected' : '' }}>サポート</option>
        </select>
    </div>

    <div class="search-form__group">
        <input type="date" id="date" name="date" value="{{ request('date') }}" class="search-form__input">
    </div>

    <div class="search-form__group">
        <button type="submit" class="search-form__button">検索</button>
        
        <button type="submit" class="search-form__button">リセット</button>
    </div>
    </div>

    <div class="search-form__group">
        <button type="submit" class="search-form__button">エクスポート</button>   
    </div>
</form>

    <table>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->last_name}}{{$contact->first_name}}</td>
            <td>{{$contact->gender}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->detail}}</td>
            <td><button type="submit" class="search-form__button">詳細</button>
        </tr>
        @endforeach

    </table>
{{ $contacts->links() }}

@endsection
