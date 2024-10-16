<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import TheNavigation from './TheNavigation.vue'
const open = ref(false)
</script>

<template>
    <header class="text-white bg-gray-300">
        <div class="container mx-auto p-4 flex justify-between items-center relative">
            <div class="flex justify-start items-center">
                <span class="mr-3 h-4 w-4 bg-pink-700 rounded-tr rounded-bl"></span>
                <a class="py-2 text-gray-700 hover:text-gray-800" href="/">MÁRIA ŽUFFOVÁ</a>
            </div>

            <div>
                <!-- desktop nav-->
                <nav class="hidden lg:block">
                    <ul class="list-none my-0 pl-0 flex items-center">
                        <the-navigation />
                    </ul>
                </nav>
                <!-- desktop nav ends-->

                <!-- mobile nav-->
                <nav v-if="open" class="w-full fixed inset-y-0 inset-x-0 flex justify-end lg:hidden">
                    <ul class="bg-gray-800 opacity-90 h-full w-full flex-col justify-start list-none my-0 pl-0 flex items-center">
                        <li @click="open = false"
                            class="w-full text-right p-4 mb-8">
                            <i class="fa fa-2x cursor-pointer fa-times"></i>
                        </li>

                        <the-navigation />
                    </ul>
                </nav>
            <!-- mobile nav ends-->
            </div>

            <i @click="open = true" class="block text-gray-700 lg:hidden cursor-pointer fa fa-lg fa-bars"></i>
        </div>
    </header>
</template>

<style scoped>

</style>
