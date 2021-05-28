import VueRouter from "vue-router";
import Vue from 'vue'
import catalog from "./components/catalog/catalog.vue";
import checkout from "./components/checkout/checkout.vue";

Vue.use(VueRouter);

export default new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "catalog",
            component: catalog,
        },
        {
            path: "/checkout",
            name: "checkout",
            component: checkout,
        },
    ],
});
