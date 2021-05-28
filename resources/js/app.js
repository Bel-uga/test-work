require('./bootstrap');
import Vue from 'vue'
import VueTheMask from 'vue-the-mask'
Vue.use(VueTheMask)
import router from './router';
Vue.filter('splitNumber', function (value) {
    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
})

const main = new Vue({
    el: "#app",
    router,
    components: {
        catalog: require("./components/catalog/catalog.vue").default,
        preloader: require("./components/preloader.vue").default,
    },
});