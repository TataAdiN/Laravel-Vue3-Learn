<script setup>
defineProps({
    title: {
        type: String,
        default: "",
    },
    type: {
        type: String,
        default: false,
    }
});
</script>
<template>
    <div class="form-group">
        <label for="email">{{ title }}</label>
        <input id="email" type="type" class="form-control" name="email" required autofocus>
        <div class="invalid-feedback">
            Please fill in your {{ title }}
        </div>
    </div>
</template>