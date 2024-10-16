<script setup>
import TheHeader from '@/Components/TheHeader.vue'
import TheFooter from '@/Components/TheFooter.vue'
</script>

<template>
    <div class="min-h-screen flex flex-col" aria-label="Content" style="font-family: 'Cardo', sans-serif">
        <the-header />

        <main class="fit-screen">
            <slot/>
        </main>

        <the-footer/>
    </div>


</template>

<style scoped>

</style>
