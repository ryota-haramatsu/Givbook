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
        <div class="container mb-4 bg-light border-top">
            <div class="row"> 
                <p><i class="fas fa-user-alt ml-4 mt-3"></i> {{ optional($result->user)->name }}</p>
            </div>
            <div class="text-center"> 
                <h4>{{ '〜'.$result->title.'〜' }}</h4>
            </div>
            <div class="row d-flex justify-content-center">
                <div id="carouselExampleControls" class="carousel slide col-md-4" data-ride="carousel">
                    <div class="col-8-xs d-flex justify-content-center carousel-item active">
                        <img class="d-block w-75 h-80" 
                        src="{{ url('storage/upload/'. $result->image) }}" alt="画像" >
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center my-4"> 
                            <button class="btn btn-danger text-light w-75">気になる</button>
                    </div>
                    <div class="row ml-3">
                        <h5>コメント</h5>
                    </div>
                    <div class="row ml-4">
                        <p>{{ $result->comment }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <h4>積読本一覧</h4>
        <!-- 本の一覧 -->
        @foreach($books as $book)
        <div class="container mb-4 bg-light border-top">
            <div class="row"> 
                <p><i class="fas fa-user-alt ml-4 mt-3"></i> {{ optional($book->user)->name }}</p>
            </div>
            <div class="text-center"> 
                <h4>{{ '〜'.$book->title.'〜' }}</h4>
            </div>
            <div class="row d-flex justify-content-center">
                <div id="carouselExampleControls" class="carousel slide col-md-4" data-ride="carousel">
                    <div class="col-8-xs d-flex justify-content-center carousel-item active">
                        <img class="d-block w-75 h-80" src="{{ url('storage/upload/'. $book->image) }}" alt="画像" >
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center my-4"> 
                        <!-- <form action="/books/user/{{ $book->user->id }}" method="get"> -->
                            <button class="btn btn-danger text-light w-75 ">気になる</button>
                            <!-- <input type="submit" value="気になる"> -->
                        <!-- </form> -->
                    </div>
                    <div class="row ml-3">
                        <h5>コメント</h5>
                    </div>
                    <div class="row ml-4">
                        <p>{{ $book->comment }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $books->links() }}
        </div>
    @endif
@endsection