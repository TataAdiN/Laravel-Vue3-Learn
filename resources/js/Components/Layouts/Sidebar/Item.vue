<script setup>
defineProps({
  to: {
    type: String,
    required: true,
  },
  text: {
    type: String,
    required: true,
  },
  icon: {
    type: String,
    required: true,
  },
});


</script>
<template>
  <li>
    <a class="nav-link" :href="to">
      <i :class="icon" v-show="icon"></i>
      <span>{{ text }}</span>
    </a>
  </li>
</template>
