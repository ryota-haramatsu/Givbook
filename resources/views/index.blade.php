@extends('layout')
@section('content')
@include('navbar')
        <form class="form-inline my-2 my-lg-0 d-flex justify-content-center" action="{{ url('books') }}" method="get">
            <label>書籍名：</label>
            <input class="form-control w-50" type="text" name="keyword" value="{{ $keyword }}" placeholder="" aria-label="Search">
            <button type="submit" class="btn btn-outline-dark btn-md my-2 my-sm-0"><i class="fas fa-search"></i></button>
        </form>
    <!-- 検索結果 -->
    @if(isset($keyword))
        <div class="text-left mb-3"><a href="books" class="text-dark"><i class="fas fa-angle-double-left"></i>積読本一覧に戻る</a></div>
        <h4 class="ml-4">検索結果（{{ $results_count }}冊）</h4>
        <div class="container mx-auto">
            <div class="row d-flex justify-content-md-start justify-content-center">
            @foreach($results as $result)
                <div class="card col-md-4 mx-auto shadow-sm p-3 mb-5 bg-white rounded-sm" style="max-width: 22rem;">
                    <div class="">
                        <p><i class="fas fa-user-alt mt-3"></i> {{ $result->user->name }}</p>
                    </div>
                    <h5 class="card-title">{{ $result->title }}</h5>
                    <a href="{{ url('books/'. $result->id)  }}">
                        <img class="card-img-top mt-2 mh-100"  src="{{ url('storage/upload/'. $result->image) }}" alt="Card image cap">
                    </a>
                    <a href="{{ route('books.show', ['book_id' => $result->id]) }}" class="btn border-dark mt-3">詳細を見る</a>
                    <div class="card-body">
                        <p class="card-text">{{ $result->comment }}<a href="{{ route('books.show', ['book_id' => $result->id]) }}" class="text-secondary float-right">詳細</a></p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    @else
    <!-- 本の一覧 -->
        <h4 class="ml-3">積読本一覧({{ $count }}冊)</h4>
        <div class="container">
            <div class="row d-flex justify-content-start">
            @foreach($books as $book)
                <div class="card col-md-4 shadow-sm p-3 mb-5 bg-white rounded-sm mx-auto" style="max-width: 21rem;">
                    <div>
                        <p><i class="fas fa-user-alt mt-3"></i> {{ optional($book->user)->name }}</p>
                    </div>
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <a href="{{ route('books.show', ['book_id' => $book->id]) }}">
                        <img class="card-img-top mt-2 mh-100"  src="{{ url('storage/upload/'. $book->image) }}" alt="Card image cap">
                    </a>
                    <a href="{{ route('books.show', ['book_id' => $book->id]) }}" class="btn border-dark mt-3 ">気になる（詳細画面へ）</a>
                    <div class="card-body">
                        <p class="card-text" >{{ $book->comment }}<a href="{{ route('books.show', ['book_id' => $book->id]) }}" class="text-secondary float-right">詳細</a></p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    @endif
    <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
    @endsection
