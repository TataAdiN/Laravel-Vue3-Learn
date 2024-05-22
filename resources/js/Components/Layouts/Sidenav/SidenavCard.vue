<script setup>
import { computed } from "vue";

defineProps({
  card: {
    type: Object,
    required: true,
    title: String,
    description: String,
    links: {
      type: Array,
      label: String,
      route: String,
      color: String,
    },
  },
});
</script>
<template>
  <div
    v-show="true"
    class="card card-plain shadow-none"
    id="sidenavCard"
  >
    <div class="p-3 card-body text-center w-100 pt-0">
      <img
        class="w-50 mx-auto"
        src="/argon/img/illustrations/icon-documentation.svg"
        alt="sidebar_illustration"
      />

      <h6 class="mb-0 text-dark up">Need Help ?</h6>

    </div>

    <a
      href="https://www.creative-tim.com/learning-lab/vue/overview/argon-dashboard/"
      target="_blank"
      class="mb-3 btn btn-dark btn-sm w-100"
    >
      Documentation
    </a>
  </div>
</template>
