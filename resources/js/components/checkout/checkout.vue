<template>
    <div class="container">
        <div class="row">
            <div class="col pt-3">
                <h3 class="text-center">Checkout</h3>
                <form @submit.prevent="showPaymentModal()">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            required
                            v-model="form.client_name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="adress">Adress</label>
                        <input
                            type="text"
                            class="form-control"
                            id="adress"
                            required
                            v-model="form.client_address"
                        />
                    </div>
                    <div class="form-group">
                        <label for="delivery">Delivery</label>
                        <select class="form-control" id="delivery" required>
                            <option
                                v-for="delivery in deliveries"
                                :key="delivery.id"
                                value="delivery.id"
                            >
                                {{ delivery.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="totalProduct">Total product</label>
                        <input
                            type="number"
                            class="form-control"
                            id="totalProduct"
                            required
                            v-model="form.total_product_value"
                        />
                    </div>
                    <div class="form-group">
                        <label for="totalShiping">Total shiping</label>
                        <input
                            type="number"
                            class="form-control"
                            id="totalShiping"
                            required
                            v-model="form.total_shipping_value"
                        />
                    </div>
                    <message ref="message"></message>
                    <button
                        type="submit"
                        class="btn btn-outline-info btn-sm d-block rounded-0"
                    >
                        BUY NOW
                    </button>
                    <payment></payment>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import message from "../message";
import payment from "./payment";
export default {
    components: {
        payment,
        message,
    },
    data: function () {
        return {
            form: {
                client_name: "",
                client_address: "",
                total_product_value: 1,
                total_shipping_value: 0,
            },
            deliveries: [],
        };
    },
    mounted: function () {
        this.getDeliveries();
    },
    methods: {
        getDeliveries() {
            this.$root.$refs.preloader.show();
            axios
                .get("/api/delivery")
                .then((response) => {
                    this.deliveries = response.data.deliveries;
                    this.$root.$refs.preloader.hide();
                })
                .catch((error) => {
                    this.$root.$refs.preloader.hide();
                });
        },
        save() {
            this.$root.$refs.preloader.show();
            axios
                .post("/api/order", this.form)
                .then((response) => {
                    this.$root.$refs.preloader.hide();
                    this.$refs.message.show("Your order is accepted");
                })
                .catch((error) => {
                    this.$root.$refs.preloader.hide();
                    this.$refs.message.show("An error has occurred");
                });
        },
        showPaymentModal() {
            $("#paymentModal").modal("show");
        },
    },
};
</script>
