<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import PageLayout from '@/Layouts/PageLayout.vue'

const props = defineProps({ page: Object })
</script>

<template>
    <MainLayout>
        <Head :title="page.title"/>
        <page-layout :image="page.image" :title="page.title">
            <div v-html="page.body"/>
        </page-layout>
    </MainLayout>
</template>

<style scoped>

</style>
