<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const user = computed(() => usePage().props.user)
</script>

<template>
    <div>
        <a v-for="link in user.socials"
           key="link.key"
           :href="link.link"
           class="mx-3 text-gray-700 hover:text-gray-800"
           target="_blank">
            <i :class="`flex-grow fa-lg ${link['fa-icon']}`"></i>
        </a>
    </div>
</template>

<style scoped>
</style>
