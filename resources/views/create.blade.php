@extends('layout')

@section('content')
    @include('navbar')
    <div class="text-center">
            <h1 class="h5">-本を登録する-</h1>

        
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