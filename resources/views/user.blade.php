@extends('layout')

@section('content')
    @include('navbar')
    <!-- 登録した本を編集、削除できる機能と一覧 -->
    <div class="text-right mr-4">ようこそ、{{ $user->name }}さん</div>
    <h4 class="ml-2">登録した本</h4>
        <div class="container">
            <div class="row d-flex justify-content-md-start justify-content-center ">
            @foreach($user->books as $book)
                <div class="card col-md-4 mx-auto shadow-sm p-3 mb-5 bg-white rounded-lg" style="max-width: 21rem;">
                    <img class="card-img-top mt-2"  src="{{ url('storage/upload/'. $book->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ '〜'.$book->title.'〜' }}</h5>
                        <p class="card-text">{{ $book->comment }}</p>
                        <a href="{{ route('books.show', ['book_id' => $book->id]) }}" class="btn border-dark btn-block px-30 mb-2"><i class="fas fa-book-open"></i> 詳細画面</a>
                         <a href="{{ route('books.edit', $book->id) }}" class="btn border-dark mb-2 d-block"><i class="fas fa-edit"></i>  編集する</a>
                         <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <!-- <input type="submit" value="&#xf2ed; 削除する" class="btn border-dark fas" onclick='return confirm("本当に削除してもいいですか？");'> -->
                        <button type="submit"  class="btn border-dark btn-block px-30" onclick='return confirm("本当に削除してもいいですか？");'><i class="fas fa-trash-alt"></i>  削除する</button>    
                    </form>
                    </div>
                </div>
            @endforeach
            <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
            </div>
        </div
@endsection