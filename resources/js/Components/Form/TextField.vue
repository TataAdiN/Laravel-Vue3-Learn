<script setup>
import { ref } from 'vue';

defineProps({
    modelValue: String,
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
        default: false,
    },
    hasError:{
        type: Boolean,
        default: false,
    }
});

defineEmits(['update:modelValue']);

const input = ref(null);

</script>

<template>
    <div class="form-group">
        <label :for="name">
            {{ title }}
        </label>
        <input type="type" class="form-control"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            ref="input"
            :id="name"
            :name="name" required autofocus>
        <div class="invalid-feedback" v-show="hasError">
            Please fill with valid <b>{{ title }}</b>
        </div>
    </div>
</template>