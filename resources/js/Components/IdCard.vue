<script setup>
import SocialLinks from '@/Components/SocialLinks.vue'
</script>

<template>
    <section class="p-4 pb-0 border border-gray-200 shadow-lg w-full sm:w-3/5 md:w-1/2 lg:w-auto mb-8 md:mb-0">
        <main class="flex justify-center items-center flex-col px-4 sm:px-16 py-10 bg-gray-200">
            <img class="w-48 h-48 rounded-full mb-6" src=/img/09_maria_zuffova.jpg alt="Profile image">
            <h2 class="uppercase font-thin mb-0">Mária</h2>
            <h2 class="uppercase font-thin mb-0">Žuffová</h2>
            <div class="h-0.5 w-1/5 mx-auto bg-pink-700 my-6"></div>
            <h4 class="uppercase font-thin mb-0 text-center">Researcher</h4>
            <p class="pb-0 text-xs text-gray-600"><i class="fa fa-map-marker-alt mr-1"></i>European University Institute</p>
        </main>

        <footer class="flex justify-center items-center py-5">

            <social-links />

        </footer>

    </section>
</template>

<style scoped>

</style>
