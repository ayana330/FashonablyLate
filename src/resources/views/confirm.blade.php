@extends('layouts.app')

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>お問い合わせ内容 確認</h2>
  </div>

   <form action="{{ route('contact.confirm') }}" method="POST">
        @csrf

    <table class="confirm-table">
      <tr>
        <th>お名前（姓）</th>
        <td>{{ $inputs['last_name'] ?? '未入力' }}</td>
      </tr>
      <tr>
        <th>お名前（名）</th>
        <td>{{ $inputs['first_name'] ?? '未入力' }}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>{{ $inputs['gender'] ?? '未選択' }}</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{ $inputs['email'] ?? '未入力'}}</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>{{ $inputs['tel1'] ?? '未入力'}}-{{ $inputs['tel2'] ?? '' }}-{{ $inputs['tel3'] ?? '' }}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{ $inputs['address'] ?? '未入力' }}</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{ $inputs['building'] ?? '未入力' }}</td>
      </tr>
      <tr>
        <th>お問い合わせの種類</th>
        <td>{{ $inputs['inquiry_type'] ?? '未選択' }}</td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
        <td>{!! nl2br(e($inputs['inquiry_content'] ?? '未入力')) !!}</td>
      </tr>
    </table>

    {{-- hiddenフィールドで値を保持 --}}
    @if (!empty($inputs))
    @foreach ($inputs as $name => $value)
      @if(is_array($value))
        @foreach($value as $v)
          <input type="hidden" name="{{ $name }}[]" value="{{ $v }}">
        @endforeach
      @else
        <input type="hidden" name="{{ $name }}" value="{{ $value }}">
      @endif
    @endforeach
    @endif
    
    <div class="form__buttons">
      <button type="submit" name="action" value="back">戻る</button>
      <button type="submit" name="action" value="submit">送信</button>
    </div>
  </form>
</div>
@endsection

