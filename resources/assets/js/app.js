
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueAxios from 'vue-axios';
import axios from 'axios';
import flash from 'vue-flash';

require('./bootstrap');
window.Vue = require('vue');

Vue.use(VueAxios, axios);

const eventBus = new Vue() ;// Single event bus
Vue.mixin({
    data: function () {
        return {
            eventBus: eventBus
        }
    }
});
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//Vue.component('api-call', require('./components/PostComponent'));
Vue.component('coin-add-component', require('./components/AddComponent'));
Vue.component('coin-get-component', require('./components/GetComponent'));

const app = new Vue({
    el: '#app'
});
