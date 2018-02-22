
require('./bootstrap');

window.Vue = require('vue');


let MyHeader = require('./components/MyHeader.vue');
let MyFooter = require('./components/MyFooter.vue');
let Home = require('./components/Home.vue');

const app = new Vue({
    el: '#app',
    components: { MyHeader, MyFooter, Home }
});
