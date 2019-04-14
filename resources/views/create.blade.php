@extends('layout')

@section('content')
    @include('navbar')
    <div class="text-center">
        
        <h2>-本を登録する-</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    @include('form')
    </div>
@endsection