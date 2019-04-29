<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GivBook</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/top.css">
    <script src="/js/app.js" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<style>
body {
    letter-spacing: 0.1rem;
    line-height: 1.7rem;
}

</style>
<body>
<header class="header pb-5">
<div class="container p-0">
        <h1 class="mt-2 ml-2">GivBook</h1>

    <div class="row d-flex justify-content-center">
            <div class="col-12 jumbotron top-img m-0">
                <div  class="d-flex justify-content-center">
                    <p class="text-dark text-center h4 m-5" id="tategaki"><strong>あなたにとって不必要なものが、<br>
                    誰かにとって大切な一冊になる。<br>
                    そんな感動を味わいませんか。</strong></p>
                </div>
                <div class="text-center">
                <a class="btn btn-success btn-lg d-inline-block mb-3" href="{{ url('register') }}" role="button">GivBookをはじめる</a><br>
                <a class="btn btn-primary btn-lg d-inline-block" href="{{ url('login') }}" role="button">ログイン</a>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

<section class="section">
    <div class="container pb-5"> 
         <div class="row d-flex justify-content-center">
            <h1 class="h4">-GivBookとは-</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10 ">
                    <p>「購入したけど一度も読んでない」</p>
                    <p>「内容を理解できなくて本棚に眠っている」</p>
                    <p>「本が好きな人に私の大切な本をあげたい」</p>
                </ul>
                <p>そのような「積読本（入手した書籍を読むことなく自宅で積んだままにしている状態の本）」をゆずったり、もらったりするためのサービスとなっています。</p>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-4">
            <h1 class="h4">-GivBookの使い方３ステップ-</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <h1 class="h5"><u>ステップ1</u></h1>
                <p>初めての方は「GivBookをはじめる」を選択して新規登録を行なってください。<br>（新規登録をされている方はログインボタンを押してください。）</p>
                <i class="fas fa-angle-double-down pl-4 display-4"></i>
                <h1 class="h5 mt-3"><u>ステップ2</u></h1>
                    <p>本を登録する」ボタンを押して、あなたが所有している本を登録してみましょう。</p>
                <i class="fas fa-angle-double-down pl-4 display-4"></i>
                <h1 class="h5 mt-3"><u>ステップ3</u></h1>
                <p>気になった本があったら、「気になるボタン」を押してメッセージの交換をしてみると良いでしょう。</p>
            
                <div class="display-4 text-center d-inline-block d-flex justify-content-center">
                    <div class="">
                        <h3 class="text-center">Give</h3>
                        <i class="fas fa-user-alt"></i>
                        <i class="fas fa-arrow-right"></i>
                        <i class="fas fa-book"></i>
                        <i class="fas fa-user-alt"></i>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="text-center py-5">
            <a class="btn btn-success btn-lg d-inline-block" href="../auth/signin" role="button">GivBookをはじめる</a><br>
        </div>
    </div>
</section>


<footer class="footer text-center h1">
    <div class="container mb-5">
    <a href="https://twitter.com/ryotan1106" target="_blank"><i class="fab fa-twitter mx-2"></i></a>
    <a href="https://www.facebook.com/ryouta.haramatsu?ref=bookmarks" target="_blank"><i class="fab fa-facebook" style="color:rgb(58,84,158);"></i></a>
    </div>
</footer>
</nav>
</body>
</html>