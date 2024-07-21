<script setup>
import Modal from '@/Components/Modal.vue';
import Button from "@/Components/Button.vue";
import { watchEffect } from 'vue';

const props = defineProps({
    show: Boolean,
    message: String,
});

const emit = defineEmits(['close']);

watchEffect(() => {
    if (props.show) {

    } else {

    }
});
</script>

<template>
    <Modal id="modal_login_result" :size="'modal-lg'">
        <template #title>
            Login Result
        </template>
        <template #body>
            {{ props.message }}
        </template>
        <template #footer>
            <div class="d-flex gap-4">
                <Button @click="emit('close')" :type="'secondary'" :title="'Close'"/>
            </div>
        </template>
    </Modal>
</template>