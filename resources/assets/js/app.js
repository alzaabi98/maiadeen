


require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy, {
    defaultIconPack: 'fa'
});


// Vue.component('example', require('./components/Example.vue'));
Vue.component('my-panel', require('./components/Panel.vue'));
Vue.component('my-rating', require('./components/Rating.vue'));
Vue.component('user-comment', require('./components/Comment.vue'));


const app = new Vue({
    el: '#app',
    data: {}
});


document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any nav burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {

            // Get the target from the "data-target" attribute
            var target = $el.dataset.target;
            var $target = document.getElementById(target);

            // Toggle the class on both the "navbar-burger" and the "navbar-menu"
            $el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

        });
        });
    }

    });
