<script setup>
import Navbar from "@/Components/Layouts/Navbar/Index.vue";
import Sidebar from "@/Components/Layouts/Sidebar/Index.vue";
import Breadcrumbs from "@/Components/Layouts/Breadcrumbs.vue";
import Footer from "@/Components/Layouts/Footer.vue";

const root = {
    'link' : 'http://laravel-vue3-learn.test',
    'text' : 'Dashboard'
};
const link_before = {
    'link' : 'https://tataadin.id',
    'text' : 'Web'
}
</script>

<template>
    <Navbar />
    <Sidebar />
    <div class="main-content">
        <section class="section">
            <Breadcrumbs :root="root" :current="'Blank Page'" :before="link_before" />
            <slot name="breadcrumbs" />
            <slot name="content"/>
        </section>
    </div>
    <Footer />
</template>
