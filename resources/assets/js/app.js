
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)
// Vue.component('example', require('./components/Example.vue'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('message', require('./components/message.vue'));
// Vue.component('chat-form', require('./components/ChatForm.vue'));


const app = new Vue({
    el: '#app',
    
    data: {
        message: '',
        chat:{
            message:[],
            user:[],
            color:[],
            time:[],
        },
        typing:'',
        numberOfUsers:0
    },
    watch:{
        message(){
            Echo.private('chat')
            .whisper('typing', {
                name: this.message
            });
        },
        chat: {
            handler: function() {
                localStorage.setItem('chat', JSON.stringify(this.chat));
            },
            deep: true
        }
    },
    // mounted() {
       
    // },
    

    methods: {
        send() {
            if (this.message.length != 0) {
                this.chat.message.push(this.message);
                this.chat.color.push('success');
                this.chat.user.push('you');
                this.chat.time.push(this.getTime());
                axios.post('/send', {
                    
                    message : this.message,
                    chat:this.chat,

                  })
                  .then(response => {
                    console.log(response);
                    this.message = ''
                  })
                  .catch(error => {
                    console.log(error);
                  });
                
            }
        },
        getTime(){
            let time = new Date();
            return time.getMonth()+1+'月'+time.getDate()+'日  '+time.getHours()+'時'+time.getMinutes()+'分';
        },

        getOldMessages() {
            axios.post('/getOldMessage')
                .then(response => {
                    console.log(response);
                    if (response.data != ''){
                        this.chat = response.data;
                    }
                })
                .catch(error => {
                    console.log(error);
                });
        },
        deleteSession() {
                axios.post('/deleteSession');
        },

        // purge() {
        //     if(!confirm('ルームを削除しますか？')) {
        //         return;
        //     }
        //     this.chat = this.send;
        // },

    },

    mounted() {
        this.chat = JSON.parse(localStorage.getItem('chat'));
        Echo.private('chat')
             .listen('ChatEvent', (e) => {
                 this.chat.message.push(e.message);
                 this.chat.user.push(e.user);
                 this.chat.color.push('warning');
                 this.chat.time.push(this.getTime());
                 axios.post('/saveToSession',{
                     chat:this.chat
                 })
                .then(response => {
                    // console.log(response);
                    // this.chat = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
                })

            .listenForWhisper('typing', (e) => {
                if(e.name != '') {
                    this.typing = '書き込み中...'
                }else{
                    this.typing = ''
                }
        });
    }
});