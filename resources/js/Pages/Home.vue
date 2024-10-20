<script setup>
import { Head, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import IdCard from '@/Components/IdCard.vue'

const props = defineProps({
    page: Object,
    settings: Object,
})
</script>

<template>
    <MainLayout>
        <Head :title="page.title"/>

        <div class="container mx-auto px-2 py-4 flex-grow flex items-center justify-center">

            <div class="flex justify-center items-center flex-col md:flex-row md:mb-0 lg:justify-center">
                <id-card/>

                <section class="p-4 w-full md:w-1/2 lg:w-5/12 ml-4">
                    <h1 class="uppercase text-4xl text-center md:text-left">{{ page.title }}</h1>
                    <div class="my-6 md:my-10 flex justify-center items-center flex-col md:flex-row md:justify-start">
                        <Link
                            :href="settings.home_page_link1_url"
                            class="px-6 py-2 uppercase bg-pink-700 text-white hover:text-white hover:bg-hover-800 rounded-full mb-4 md:mb-0 md:mr-2">
                            {{ settings.home_page_link1_title }}
                        </Link>
                        <Link
                            :href="settings.home_page_link2_url"
                            class="px-6 py-2 uppercase bg-white text-gray-800 border border-gray-400 hover:text-gray-800 hover:bg-gray-100 rounded-full">
                            {{ settings.home_page_link2_title }}
                        </Link>
                    </div>

                    <div class="leading-6" v-html="page.body">
                    </div>
                </section>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
