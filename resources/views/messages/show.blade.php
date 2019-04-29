@extends('layout')

@section('content')
    @include('navbar')
    <div class="text-center">
        
        <h2>-コメント欄-</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container mb-4 bg-white">
            @foreach($messages as $message)
            <div class=text-left>
                <p>{{ $message->user->name }}：{{ $message->message }}</p>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection