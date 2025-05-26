@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')

  <main class="thanks__content">
    <div class="thanks__message-box">
      <p class="thanks__message">
        お問い合わせありがとうございました
      </p>
      <!-- HOMEボタン -->
      <div class="thanks__button">
        <a href="/" class="thanks__link">HOME</a>
      </div>
    </div>

  <div class="thanks-page-bg__inner">
    <span class="thanks-page-bg__text">Thank you</span>
  </div>
  </main>
</body>
</html>
