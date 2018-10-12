
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


Echo.channel('push')
    .listen('.push.message', (e) => {
        alert(e.message)
        console.log(e);
    });
Echo.private('privatePush.' + window.id)
    .listen('PrivateMessageEvent', (e) => {
        alert('qweqwe')
        console.log(e);
    });