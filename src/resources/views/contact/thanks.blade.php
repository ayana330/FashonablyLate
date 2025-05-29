@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')

    <div class="thanks__content">
      <div class="thanks__heading">
        お問い合わせありがとうございました
      </div>
      <div class="thanks__content-back">
        Thank you
      </div>
    </div>
    <div class="form__button">
      <button type="submit">HOME</button>
    </div>

@endsection
