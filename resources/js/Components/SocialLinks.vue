<script setup>
import { computed, onMounted } from 'vue'
import { usePage } from '@inertiajs/vue3'

const user = computed(() => usePage().props.user)

onMounted(() => {
    console.log(user)
})
</script>

<template>
    <div>
        <a v-for="link in user.socials"
           key="link.key"
           target="_blank"
           :href="link.link"
           class="mx-3 text-gray-700 hover:text-gray-800">
                <i :class="`flex-grow fa-lg ${link['fa-icon']}`"></i>
        </a>
    </div>
</template>

<style scoped>

</style>
