<script setup>
defineProps({
    name : {
        type: String,
        default: '',
    },
    title: {
        type: String,
        default: '',
    },
    type: {
        type: String,
        type: String,
        type: String,
        type: String,
        default: false,
    }
});
</script>

<template>
    <div class="form-group">
        <label :for="name">
            {{ title }}
        </label>
        <input type="type" class="form-control"
            :id="name"
            :name="name" required autofocus>
        <div class="invalid-feedback">
            Please fill in your {{ title }}
        </div>
    </div>
</template>