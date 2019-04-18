@extends('layout')
@include('navbar')
@section('content')
        <form class="form-inline my-2 my-lg-0 d-flex justify-content-center" action="{{ url('books') }}" method="get">
            <label>書籍名：</label>
            <input class="form-control mr-sm-2 w-50" type="text" name="keyword" value="{{ $keyword }}" placeholder="" aria-label="Search">
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-search"></i></button>
        </form>
    <!-- 検索結果 -->
    @if(isset($keyword))
        <div class="text-left mb-3"><a href="books" class="text-dark"><i class="fas fa-angle-double-left"></i> 積読本一覧に戻る</a></div>
        <h4>検索結果</h4>
        @foreach($results as $result)
        <div class="container">
            <div class="row d-flex justify-content-md-start justify-content-center">
                <div class="card col-md-3" style="max-width: 16rem;">
                    <div class="">
                        <p><i class="fas fa-user-alt mt-3"></i> {{ $result->user->name }}</p>
                    </div>
                    <h5 class="card-title">{{ $result->title }}</h5>
                    <img class="card-img-top mt-2"  src="{{ url('storage/upload/'. $result->image) }}" alt="Card image cap">
                    <div class="card-body">
                    <button class="button mb-3">メッセージを送る</button>
                        <h5>コメント</h5>
                        <p class="card-text">{{ $result->comment }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <h4>積読本一覧</h4>
        <!-- 本の一覧 -->
        <div class="container">
            <div class="row d-flex justify-content-md-start justify-content-center">
            @foreach($books as $book)
                <div class="card col-md-3" style="max-width: 16rem;">
                    <div class="">
                        <p><i class="fas fa-user-alt mt-3"></i> {{ optional($book->user)->name }}</p>
                    </div>
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <img class="card-img-top mt-2"  src="{{ url('storage/upload/'. $book->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <button class="button mb-3"><a href="{{ route('chat') }}">メッセージを送る</a></button>
                        <h5>コメント</h5>
                        <p class="card-text">{{ $book->comment }}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <!-- <div class="d-flex justify-content-center">
            {{ $books->links() }}
        </div> -->
    @endif
@endsection