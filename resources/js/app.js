/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
require("datatables.net-bs4");
require("datatables.net-responsive-bs4");
require("@fortawesome/fontawesome-free");

// We aren't using Vue at the moment, but we might in the future, so let's
// disable it for now

// window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// const app = new Vue({
//     el: '#app',
// });

/* jQuery Starts Here */

$(function() {
    $("table.dt").DataTable();

    $();
});

/* jQuery Ends Here */
