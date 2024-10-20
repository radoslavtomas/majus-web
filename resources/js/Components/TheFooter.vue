<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const user = computed(() => usePage().props.user)
const settings = computed(() => usePage().props.settings)
</script>

<template>
    <footer class="bg-gray-600 text-white">
        <div class="container mx-auto px-2 py-4 text-sm flex justify-between items-center">
            <div>
                &copy; {{user.name}}
            </div>

            <p>{{settings.footer_description}}</p>
        </div>
    </footer>
</template>

<style scoped>

</style>
