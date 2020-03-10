/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Card from './components/Card.vue';

/**
 * The following block of code may be used to automatically register your
 * Vue partials. It will recursively scan this directory for the Vue
 * partials and automatically register them with their "basename".
 *
 * Eg. ./partials/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('v-card',require('./components/Card.vue').default);
Vue.component('v-input',require('./components/Input.vue').default);
Vue.component('v-modal', require('./components/Modal').default);
Vue.component('v-alert', require('./components/Alert').default);
Vue.component('v-dropdown', require('./components/Dropdown').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding partials to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
