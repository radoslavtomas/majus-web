<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <li class="mb-0">
        <Link class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400 text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" :href="route('home')"
              title="Home">
            Home
        </Link>
    </li>
    <li class="mb-0">
        <Link class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400 text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" :href="route('about')"
              title="About">
            About
        </Link>
    </li>
    <li class="mb-0">
        <Link class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400 text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
              :href="route('research')"
              title="Research">
            Research
        </Link>
    </li>
    <li class="mb-0">
        <Link class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400 text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
              :href="route('engagement')"
              title="Public engagement">
            Public engagement
        </Link>
    </li>
    <li class="mb-0">
        <Link class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400 text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
              :href="route('teaching')"
              title="Teaching">
            Teaching
        </Link>
    </li>
    <li class="mb-0">
        <Link class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400 text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800"
              :href="route('contact')"
              title="Contact us">
            Contact
        </Link>
    </li>
</template>

<style scoped>

</style>
