@extends('layout')

@section('content')
    @include('navbar')
    <div class="text-center">
        
        <h1 class="h5">-詳細ページ-</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 border shadow-sm p-3 mb-5 bg-white rounded-lg" style="max-width: 16rem;">
                <div class="d-flex justify-content-left">
                    <p><i class="fas fa-user-alt mt-3"></i> {{ optional($book->user)->name }}</p>
                </div>
                <h5 class="card-title d-flex justify-content-left">{{ $book->title }}</h5>
                <img class="card-img-top mt-2"  src="{{ url('storage/upload/'. $book->image) }}" alt="Card image cap">
                    <div class="mt-3">
                    <h5 class="text-left mt-2 border-bottom border-success">本をあげたい理由</h5>
                    <div>
                        <p class="card border-light text-left mt-2">{{ $book->comment }}</p>
                    </div>
                    </div>       
            </div>
            <div class="col-md-6 mt-4 ml-md-4" >
                 <h1 class="h6 border-bottom border-bottom border-dark pb-2">コメント一覧</h1>
                 <form action="{{ route('messages.store') }}" method="POST"  enctype="multipart/form-data"
                class="form-inline my-lg-2 d-flex justify-content-left">
                    {{ csrf_field() }}
                        <input type="text" name="message" class="form-control w-75" placeholder="メッセージを入力">
                        <button type="submit"  class="btn btn-outline-dark my-2 my-sm-0 w-25">送信</button>
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                </form>
            @foreach($book->message as $message)
                <div class="m-1 text-left border rounded-lg">
                    <div class="d-flex ml-2">{{ $message->user->name }}：{{ $message->message }}   
                    </div>
                    <div class="d-flex ml-2">{{ $message->created_at }}</div>
                </div>
            @endforeach
                 <div class="paginate d-flex justify-content-center">
                 {{ $book->message->links() }}
                 </div>
            </div>
        </div>
    </div>
@endsection