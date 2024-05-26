<script setup>
defineProps({
    title: {
        type: String,
        default: "",
    },
    showForgot: {
        type: Boolean,
        default: false,
    }
});
</script>
<template>
    <div class="form-group">
        <div class="d-block">
            <label for="password" class="control-label">{{ title }}</label>
            <div class="float-right" v-show="showForgot">
                <a href="auth-forgot-password.html" class="text-small">
                    Forgot Password?
                </a>
            </div>
        </div>
        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
        <div class="invalid-feedback">
            please fill in your {{ title }}
        </div>
    </div>
</template>