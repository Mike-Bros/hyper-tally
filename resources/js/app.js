require('./bootstrap');

// Require Vue
window.Vue = require('vue').default;

// Register Vue Components
//Vue.component('example-component', require('./components/ExampleComponent').default);


const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
// Initialize Vue
let sharedData = {};

const app = new Vue({
    el: '#app',
    data() {
        return {
            greeting: 'Hello!'
        };
    }
});
