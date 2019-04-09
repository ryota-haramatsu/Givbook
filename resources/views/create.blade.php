@extends('layout')

@section('content')
    @include('navbar')
    <div class="text-center">
        
        <h2>-本の登録-</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['url' => 'books', 'method' => 'post', 'files'=>true ]) !!}
            <div class="form-group">
                {!! Form::label('title', '本のタイトル') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('comment', 'コメント') !!}
                {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('img', '画像') !!}
                {!! Form::file('img', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('本を登録する', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection