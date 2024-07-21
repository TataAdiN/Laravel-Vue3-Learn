<script setup>
const props = defineProps({
    id: {
        type: String,
        required: true,
    },
    size: {
        type: String,
        default: "",
    },
});
</script>
<template>
    <teleport to="body">
        <div class="modal fade" tabindex="-1" role="dialog" :id="props.id">
            <div :class="`modal-dialog modal-dialog-centered ${props.size}`" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <slot name="title" />
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <slot name="body" />
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <slot name="footer" />
                    </div>
                </div>
            </div>
        </div>
    </teleport>
</template>
