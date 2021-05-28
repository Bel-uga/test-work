<template>
    <div
        class="alert alert-info alert-dismissible fade rounded-0"
        :class="{ show: visible }"
        role="alert"
        v-if="visible"
    >
        {{ text }}
        <button type="button" class="close" @click="visible = false">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            visible: false,
            text: "",
        };
    },
    methods: {
        show: function (message) {
            this.text = message;
            this.visible = true;
        },
    },
};
</script>
