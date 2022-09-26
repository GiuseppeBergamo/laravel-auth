

require('./bootstrap');

window.Vue = require('vue');

import App from './components/App.vue';

const root = new Vue({
    el: '#root',
    components: {
        App,
    },
    render: h => h(App)
});