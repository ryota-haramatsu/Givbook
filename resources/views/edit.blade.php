@extends('layout')

@section('content')
    @include('navbar')
    <div class="text-center">
        
        <h2>-登録した本の修正-</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container border mb-4 bg-light">
             <form class="form-group" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data" method="PUT">
                <label for="">本のタイトル</label>
                <div class="form-group">
                    <input type="text" name="title" value="{{ $book->title }}">
                </div>
                <label for="">コメント</label>
                <div class="form-group">
                    <textarea name="comment" id="" cols="30" rows="3" placeholder="">{{ $book->comment }}</textarea>
                </div>
                <div class="form-group"> 
                    <input type="file" name="image">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <br>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <input type="submit"  value="修正する" class="btn btn-success rounded">
            </form>
        </div>
    </div>
@endsection