<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GivBook</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group {
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row" id="app">
        <div class=" offset-sm-1 col-sm-10">
            <li class="list-group-item active">チャットルーム</li>
            <div class="badge badge-pill badge-primary">@{{ typing }}</div>
            <ul class="list-group" v-chat-scroll>
                

                <message
        
                v-for="value,index in chat.message"
                :key=value.index
                :color = chat.color[index]
                :user = chat.user[index]
                :time = chat.time[index]
                >
                    @{{ value }}

                </message>
            </ul>
            <form @submit.prevent="send">
                <div class="d-flex justify-content-start">
                    <input type="text" class="form-control"  
                        placeholder="メッセージを入力してください" v-model='message'>
                    <input type="submit" class="btn btn-light btn-md border">
                </div>
            </form>
            <br>
            <!-- <a  href="" class="btn btn-warning btn-sm" @click='deleteSession'>ルームを削除する</a> -->
        
         <!-- <button @click='purge'>ルームを削除</button> -->
        </div>
    </div>
</div>
<script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

