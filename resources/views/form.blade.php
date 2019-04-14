
<div class="container border mb-4 bg-light">
    <form class="form-group" action="{{ route('books.store') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <label for="">本のタイトル</label>
        <div class="form-group">
            <input type="text" name="title">
        </div>
        <label for="">コメント</label>
        <div class="form-group">
            <textarea name="comment" id="" cols="30" rows="3" placeholder="＊本をあげたい理由を書いてみる良いでしょう。"></textarea>
        </div>
        <div class="form-group"> 
            <input type="file" name="image">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        <br>
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="submit"  value="登録する" class="btn btn-success rounded">
    </form>
</div>