@extends('layout')

@section('content')
    @include('navbar')
    ようこそ{{ $user->name }}さん
    <div>
        <ul>
            <li>気になった本のリスト</li>
            <li> メッセージを送る</li>
        
            <li>登録した本のリスト</li>
            <li>編集ボタン</li>
            <li>削除ボタン</li>
        </ul>

    </div>

@endsection