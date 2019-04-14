@extends('layout')

@section('content')
    @include('navbar')
    <!-- 登録した本を編集、削除できる機能と一覧 -->
    <div class="text-right">ようこそ、{{ $user->name }}さん</div>
    <h4>〜登録した本〜</h4>
        <div class="container">
            <div class="row d-flex justify-content-center">
            @foreach($user->books as $book)
                <div class="card col-md-3" style="max-width: 16rem;">
                    <img class="card-img-top mt-2"  src="{{ url('storage/upload/'. $book->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ '〜'.$book->title.'〜' }}</h5>
                        <p class="card-text">{{ $book->comment }}</p>
                         <!-- <a href="{{ url('books/edit/'. $book->id) }}" class="btn btn-primary">編集する</a> -->
                         <a href="{{ route('books.edit', $book->id) }}"class="btn btn-primary">編集</a>
                         <form action="/books/delete/{{ $book->id }}" method="post" class="d-inline">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="btn btn-danger"onclick='return confirm("削除していいんだね？もう一度聞くよ？いいんだね？");'>
                        </form>
                    </div>
                </div>
            @endforeach
           
            </div>
        </div>

        <!-- 気になった本を保留しておいて登録してユーザーに対してメッセージを送ることができる機能 -->
        <!-- <h4>〜気になった本〜</h4>
        <div class="container">
            <div class="row d-flex justify-content-center">
            @foreach($user->books as $book)
            <div class="card col-md-3" style="max-width: 16rem;">
                <p><i class="fas fa-user-alt ml-4 mt-3"></i> {{ optional($book->user)->name }}</p>
                    <img class="card-img-top mt-2"  src="{{ url('storage/upload/'. $book->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ '〜'.$book->title.'〜' }}</h5>
                        <p class="card-text">{{ $book->comment }}</p>
                        <a href="#" class="btn btn-primary">メッセージを送る</a>
                    </div>
                </div>
            @endforeach
            </div> -->
            
        </div>

    
@endsection