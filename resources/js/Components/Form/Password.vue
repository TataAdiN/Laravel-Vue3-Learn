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
        default: "",
    },
    showForgot: {
        type: Boolean,
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
        <div class="d-block">
            <label :for="name" 
                class="control-label">
                {{ title }}
            </label>
            <div class="float-right" v-show="showForgot">
                <a href="auth-forgot-password.html" class="text-small">
                    Forgot Password?
                </a>
            </div>
        </div>
        <input :id="name"
            :name="name" 
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            ref="input"
            type="password" 
            class="form-control"
            tabindex="2" 
            required>
        <div class="invalid-feedback" v-show="hasError">
            Please fill with valid <b>{{ title }}</b>
        </div>
    </div>
</template>