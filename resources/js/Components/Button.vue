<script setup>
defineProps({
    type: {
        type: String,
        default: "",
    },
    title: {
        type: String,
        default: "",
    }
});
</script>
<template>
    <button :class="`btn btn-${type} btn-lg btn-block`">
        {{ title }}
    </button>
</template>