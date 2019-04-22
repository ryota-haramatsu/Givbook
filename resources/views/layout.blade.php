<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GivBook</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="/css/chat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  
  
</head>
<body>

<div class="container py-4 bg-white"> 
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @if(session('delete_message'))
        <div class="alert alert-danger">{{ session('delete_message') }}</div>
    @endif
    @if(session('update_message'))
        <div class="alert alert-primary">{{ session('update_message') }}</div>
    @endif
    @yield('content')
</div>
<script src="/js/app.js" defer></script>
</body>
</html>