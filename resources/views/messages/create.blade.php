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
             <form class="form-group" action="{{ route('messages.store') }}" method="POST" enctype="multipart/form-data">
             {{ csrf_field() }}
             <!-- @method('PUT') -->
                <div class="form-group">
                    <textarea name="message" id="message" value="message" cols="30" rows="3"></textarea>
                </div>
                <br>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="book_id" value="{{ $book_id }}">
                <input type="submit"  value="送信" class="btn btn-success rounded">
            </form>
        </div>
    </div>
@endsection