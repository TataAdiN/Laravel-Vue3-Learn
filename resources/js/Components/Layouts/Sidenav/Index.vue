<script setup>
import { computed } from "vue";
import SidenavList from "./SidenavList.vue";

</script>
<template>
  <div
    v-show="true"
    class="min-height-300 position-absolute w-100"
    :class="'bg-success'"
  />

  <aside
    class="my-3 overflow-auto border-0 sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl"
    :class="'fixed-start ms-3'"
    id="sidenav-main"
  >
    <div class="sidenav-header">
      <i
        class="top-0 p-3 cursor-pointer fas fa-times text-secondary opacity-5 position-absolute end-0 d-none d-xl-none"
        aria-hidden="true"
        id="iconSidenav"
      ></i>

      <a class="m-0 navbar-brand" to="/">
        <img
          :src="'/argon/img/logo-ct-dark.png'"
          class="navbar-brand-img h-100"
          alt="main_logo"
        />

        <span class="ms-2 font-weight-bold me-2">Argon Dashboard 2</span>
      </a>
    </div>

    <hr class="mt-0 horizontal dark" />

    <sidenav-list />
  </aside>
</template>
