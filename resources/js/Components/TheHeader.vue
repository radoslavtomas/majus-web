<script setup>
import { ref } from 'vue'

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
<!--                desktop nav-->
                <nav class="hidden lg:block">
                    <ul class="list-none my-0 pl-0 flex items-center">
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" href="/about"
                               title="More about us">About</a>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
                               href="/research"
                               title="Research">Research</a>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
                               href="/engagement"
                               title="Public engagement">Public engagement</a>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
                               href="/teaching"
                               title="Teaching">Teaching</a>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
                               href="/contact"
                               title="Contact us">Contact</a>
                        </li>
                    </ul>
                </nav>
<!--                desktop nav ends-->

<!--                mobile nav-->
                <nav v-if="open" class="w-full fixed inset-y-0 inset-x-0 flex justify-end lg:hidden">
                    <ul class="bg-gray-800 opacity-90 h-full w-full flex-col justify-start list-none my-0 pl-0 flex items-center">

                        <li @click="open = false"
                            class="w-full text-right p-4 mb-8">
                            <i class="fa fa-2x cursor-pointer fa-times"></i>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" href="/about"
                               title="More about us">About</a>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
                               href="/research"
                               title="Research">Research</a>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
                               href="/engagement"
                               title="Public engagement">Public engagement</a>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
                               href="/teaching"
                               title="Teaching">Teaching</a>
                        </li>
                        <li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                            <a class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
                               href="/contact"
                               title="Contact us">Contact</a>
                        </li>
                    </ul>
                </nav>
<!--                mobile nav ends-->
            </div>

            <i @click="open = true" class="block text-gray-700 lg:hidden cursor-pointer fa fa-lg fa-bars"></i>
        </div>
    </header>
</template>

<style scoped>

</style>
