<!-- Componente de vue necesita de  -->
<!-- <template></template>
<script></script>
<style></style> -->

<template>
    <h1>Hello world from example!</h1>
    <h1>{{ counter }}</h1>
    <button @click="increment">Increment</button>
    <NavLink :href="route('login')">Login</NavLink>
</template>
<script setup>
import NavLink from '@/Components/NavLink.vue';
import { ref } from 'vue';
const counter = ref(0);

const increment = () => {
    counter.value++;
}
</script>
<style scoped></style>