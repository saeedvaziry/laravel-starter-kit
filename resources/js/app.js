require('./bootstrap');
require('./scripts');

window.Vue = require('vue');

import router from './router';

import Api from './api';

window.api = new Api();

Vue.component('alert', require('./components/Alert').default);
Vue.component('loader', require('./components/Loader').default);
Vue.component('x-button', require('./components/XButton').default);

const app = document.getElementById('app');
if (app) {
    const app = new Vue({
        el: '#app',
        router,
        mounted() {
            window.api.call('get', '/api/user').then(({ data }) => {
                this.user = data.data;
                this.ready = true;
            });
        },
        data() {
            return {
                ready: false,
                user: {}
            }
        }
    });
}