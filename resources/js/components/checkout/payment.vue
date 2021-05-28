<template>
    <div
        class="modal fade"
        id="paymentModal"
        tabindex="-1"
        aria-labelledby="paymentModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Payment</h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="pay()">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Name"
                                v-model="name"
                                required
                            />
                        </div>
                        <div class="form-group">
                            <the-mask
                                class="form-control"
                                :mask="'####-####-####-####'"
                                v-model="cardNumber"
                                placeholder="Card number"
                                required
                            />
                        </div>
                        <div class="row">
                            <div class="col">
                                <the-mask
                                    class="form-control"
                                    :mask="'##/##'"
                                    v-model="cardDate"
                                    placeholder="Expiry date"
                                    required
                                />
                            </div>
                            <div class="col">
                                <the-mask
                                    class="form-control"
                                    :mask="'###'"
                                    v-model="cvc"
                                    placeholder="CVC/CVV code"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-row align-items-center mt-3">
                            <div class="col-auto my-1">
                                <button
                                    type="button"
                                    class="btn btn-outline-info btn-sm d-block rounded-0"
                                    @click="clear()"
                                    data-dismiss="modal"
                                >
                                    Close
                                </button>
                            </div>
                            <div class="col-auto my-1">
                                <button
                                    type="submit"
                                    class="btn btn-outline-info btn-sm d-block rounded-0"
                                >
                                    Pay
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            name: "",
            cardNumber: "",
            cardDate: "",
            cvc: "",
        };
    },
    methods: {
        pay() {
            $("#paymentModal").modal("hide");
            this.$parent.save();
        },
        clear() {
            this.name = "";
            this.cardNumber = "";
            this.cardDate = "";
            this.cvc = 0;
        },
    },
};
</script>
