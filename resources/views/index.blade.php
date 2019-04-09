@extends('layout')

@section('content')
    @include('navbar')
        @foreach($books as $book)
        <div>
            <div> 
                <p> <i class="fas fa-user-alt"></i></p>
            </div>
            <div class=text-center> 
                <label>{{ $book->title }}</label>
            </div>
            
            <div id="carouselExampleControls" class="container carousel slide  d-flex justify-content-center w-50" data-ride="carousel">
                <div class="row arousel-inner">
                    <div class="col-sm-6 carousel-item active ">
                    <img class="d-block" src="/img{{ $book->img }}" alt="本の画像">
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center "> 
                <button class="btn btn-danger text-light">気になる</button>
            </div>

            
            <div>
                <div>
                    <h4>コメント</h4>
                </div>
                    <p>{{ $book->comment }}</p>
            </div>
        </div>
        @endforeach
@endsection