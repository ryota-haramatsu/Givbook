<nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="/books">GivBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-lg-8">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/books/create">本の登録 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('books/user/'.Auth::id()) }}">ユーザー</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">ログアウト</a>
            </li>
          </ul>
      </div>
  </div>
</nav>