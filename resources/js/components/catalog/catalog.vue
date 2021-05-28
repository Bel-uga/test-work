<template>
    <div class="row m-0">
        <div class="col pl-md-0 my-3 pt-3">
            <h3 class="text-center">Products</h3>
            <div class="d-flex flex-wrap justify-content-center">
                <div
                    class="card card-product rounded-0 mb-3 font-14 ml-2"
                    v-for="product in products"
                    :key="product.id"
                >
                    <div class="card-body text-center">
                        <div class="text-truncate text-uppercase">
                            {{ product.name }}
                        </div>
                        <div class="font-weight-bold m-3">
                            {{ Number(product.price) | splitNumber }} KZT
                        </div>
                        <router-link
                            to="/checkout"
                            class="btn btn-outline-info btn-sm d-block rounded-0"
                        >
                            Buy
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            products: [],
        };
    },
    mounted: function () {
        this.getProducts();
    },
    methods: {
        getProducts() {
            this.$root.$refs.preloader.show();
            axios
                .get("/api/product")
                .then((response) => {
                    this.products = response.data.products;
                    this.$root.$refs.preloader.hide();
                })
                .catch((error) => {
                    this.$root.$refs.preloader.hide();
                });
        },
    },
};
</script>
<style scoped>
</style>
