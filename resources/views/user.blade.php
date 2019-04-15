@extends('layout')

@section('content')
    @include('navbar')
    <!-- 登録した本を編集、削除できる機能と一覧 -->
    <div class="text-right">ようこそ、{{ $user->name }}さん</div>
    <h4>〜登録した本〜</h4>
        <div class="container">
            <div class="row d-flex justify-content-md-start justify-content-center">
            @foreach($user->books as $book)
                <div class="card col-md-3" style="max-width: 16rem;">
                    <img class="card-img-top mt-2"  src="{{ url('storage/upload/'. $book->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ '〜'.$book->title.'〜' }}</h5>
                        <p class="card-text">{{ $book->comment }}</p>
                         <a href="{{ route('books.edit', $book->id) }}" class="button mb-2"><i class="fas fa-edit"></i> 編集する</a>
                         <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="&#xf2ed; 削除する" class="button fas d-flex" onclick='return confirm("削除していいんだね？もう一度聞くよ？いいんだね？");'>
                        </form>
                    </div>
                </div>
            @endforeach
            </div>
        </div
@endsection