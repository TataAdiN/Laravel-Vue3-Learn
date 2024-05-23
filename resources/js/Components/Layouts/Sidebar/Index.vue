<script setup>
import Item from "./Item.vue";
import ItemHasSub from "./ItemHasSub.vue";
</script>
<template>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
			<div class="sidebar-brand">
				<a href="index.html">Stisla</a>
			</div>
			<div class="sidebar-brand sidebar-brand-sm">
				<a href="index.html">St</a>
			</div>
        </aside>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<Item :to="'https://tataadin.id'" :text="'Blank Page'" :icon="'far fa-square'"/>
			<ItemHasSub :text="'Feature'" :icon="'fas fa-bicycle'">
				<Item :to="'https://tataadin.id'" :text="'Blank Page'"/>
			</ItemHasSub>
		</ul>
    </div>
</template>
