@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')

  <main>
    <div class="thanks__content">
      <div class="thanks__heading">
        お問い合わせありがとうございました
      </div>
      <div class="thanks__content-back">
        Thank you
      </div>
    <div class="thanks__content">
      <button type="submit">HOME</button>
    </div>
    </div>
  </main>
@endsection
