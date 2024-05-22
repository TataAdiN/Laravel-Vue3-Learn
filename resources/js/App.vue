<script setup>
import { computed } from "vue";
import Sidenav from "@/Components/Layouts/Sidenav/Index.vue";

</script>
<template>
    <div v-show="true"
         class="landing-bg h-100 bg-gradient-primary position-fixed w-100">
    </div>

    <sidenav v-if="true" />
</template>
