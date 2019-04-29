
<div class="container mb-4 bg-white">
    <div class="row d-flex justify-content-center">
        <form class="form-group" action="{{ route('books.store') }}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <div class="col-xs-8 form-group">
                <div>
                    <label for="inputlg" class="float-left">本の画像 <span class="text-light bg-danger d-inline-block  ml-1 px-2">必須</span></label>
                </div>
                <label for="file_photo" class="file"> 
                    <div class="book_image">
                        <img src="../../img/book_bg.jpg" height="350" id="file" style="cursor:pointer;"/>
                        <p class="book_plus display-4"><i class="fas fa-folder-plus"></i></p>
                        <input type="file" name="image" style="display:none;" id="file_photo"> 
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </label>
            </div>
            <div class="col-xs-8 form-group">
                <label for="inputlg" class="float-left">タイトル <span class="text-light bg-danger d-inline-block ml-1 px-2">必須</span></label>
                <input type="text" name="title" class="form-control input-lg" id="inputlg">
            </div>

            <div class="col-xs-8 form-group">
                <label for="inputlg" class="text-left float-left">コメント <span class="text-light bg-danger d-inline-block ml-1 px-2">必須</span></label>
                <textarea name="comment" id="inputlg" cols="40" rows="3" class="form-control input-lg"></textarea>
            </div>
    

            <div class="col-xs-8 form-group">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="submit"  value="登録する" class="btn btn-dark border rounded form-control input-lg" id="inputlg">
            </div>
        </form>
    </div>
</div>