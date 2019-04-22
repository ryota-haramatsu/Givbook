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
<body>
<header class="header pb-5">
<div class="container p-0">
        <h1>GivBook</h1>

    <div class="">
        <div class="jumbotron top-img">
        <p class="text-dark text-center h4"><strong>あなたにとって不必要なものが、<br>
        誰かにとって大切な一冊になる。<br>
        そんな感動を味わいませんか。</strong></p>
            <div class="text-center">
                <a class="btn btn-success btn-lg d-inline-block" href="{{ url('register') }}" role="button">GivBookをはじめる</a><br>
                <a class="btn btn-primary btn-lg d-inline-block " href="{{ url('login') }}" role="button">ログイン</a>
            </div>
        </div>
    </div>
</div>
</header>

<section class="section">
    <div class="container pb-5"> 
        <div class="row d-flex justify-content-center ">
            <h2>-GivBookの使い方３ステップ-</h2>
        </div>
        <div>
            <h3><u>ステップ1</u></h3>
            <p>初めての方は「GivBookをはじめる」を選択して新規登録を行なってください。（新規登録をされている方はログインボタンを押してください。）</p>
            <i class="fas fa-angle-double-down pl-4 display-4"></i>
            <h3><u>ステップ2</u></h3>
                <ul>
                    <li>「購入したけど一度も読んでない」</li>
                    <li>「一度読んだけど理解できなくて本棚に眠っている」</li>
                    <li>「本が好きな人に私の大切な本をあげたい」</li>
                </ul>
                <p>などのような思いがある人は「本を登録する」ボタンを押して、あなたが所有している本を登録してみましょう。</p>
            <i class="fas fa-angle-double-down pl-4 display-4"></i>
            <h3><u>ステップ3</u></h3>
            <p>気になった本があったら、「気になるボタン」を押してメッセージの交換をしてみると良いでしょう。</p>
            </div>
        <div class="text-center py-5">
            <a class="btn btn-success btn-lg d-inline-block" href="../auth/signin" role="button">GivBookをはじめる</a><br>
        </div>
    </div>

    <div class="container pb-5">
        <div class="feature">
            <h2 class="text-center">-GivBookの特徴-</h2>
        </div>

        <div class="feature-contain mt-5"> 
            <h3 class="text-center">Give</h3>
            <div class="icon display-4 text-center">
                <i class="fas fa-user-alt"></i>
                <i class="fas fa-long-arrow-alt-right"></i>
                <i class="fas fa-book"></i>
                <i class="fas fa-user-alt"></i>
            </div>
            <p class="text-center">つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし、硯にむかひて、</p>
        </div>

        <div class="mt-5">
            <h3 class="text-center" >Take</h2>
            <div class="icon display-4 text-center">
                <i class="fas fa-user-alt"></i>
                <i class="fas fa-book"></i>
                <i class="fas fa-arrow-left"></i>
                <i class="fas fa-user-alt"></i>
            </div>

            <p class="text-center">つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし、硯にむかひて、</p>
        </div>
       
    <div class="text-center py-5">
    <a class="btn btn-success btn-lg d-inline-block" href="../auth/signin" role="button">GivBookをはじめる</a><br>
    </div>
    <hr>
    </div>
  
</section>


<footer class="footer text-center h3 ">
    <div class="container">
    <a href="https://twitter.com/ryotan1106" target="_blank"><i class="fab fa-twitter mx-2"></i></a>
    <a href="https://www.facebook.com/ryouta.haramatsu?ref=bookmarks" target="_blank"><i class="fab fa-facebook-f mx-2"></i></a>
    </div>
</footer>
</nav>
</body>
</html>