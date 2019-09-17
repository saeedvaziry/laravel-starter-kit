<template>
    <div>
        <div class="alert" :class="'alert-' + alert_type" v-if="show && type === 'alert'">
            {{ message }}
            <a href="javascript:" class="close" @click="show = false">
                <span aria-hidden="true" class="text-black-50">&times;</span>
            </a>
        </div>
        <div class="alert alert-danger" v-if="show && type === 'validation'">
            <template v-if="errors">
                <b>{{ message }}</b>
                <ul>
                    <li v-for="(error, index) in Object.values(errors)" :key="index">{{ error[0] }}</li>
                </ul>
            </template>
            <template v-else>{{ message }}</template>
        </div>
    </div>
</template>

<script>
export default {
    name: "Alert",
    props: {
        autoClose: {
            type: Boolean,
            default: true
        }
    },
    data() {
        return {
            type: "alert",
            show: false,
            alert_type: "",
            message: "",
            errors: null
        };
    },
    watch: {
        show(value) {
            if (value && this.autoClose) {
                setTimeout(
                    function() {
                        this.show = false;
                    }.bind(this),
                    5000
                );
            }
        }
    },
    methods: {
        success(message) {
            this.setAlert("success", message);
        },
        error(message) {
            this.setAlert("danger", message);
        },
        info(message) {
            this.setAlert("info", message);
        },
        warning(message) {
            this.setAlert("warning", message);
        },
        setAlert(type, message) {
            this.reset();
            this.type = "alert";
            this.alert_type = type;
            this.message = message;
            this.show = true;
        },
        validation(data) {
            this.reset();
            this.type = "validation";
            if (data.errors) {
                this.errors = data.errors;
            }
            this.message = data.message;
            this.show = true;
        },
        reset() {
            this.show = false;
            this.errors = null;
            this.message = "";
        }
    }
};
</script>