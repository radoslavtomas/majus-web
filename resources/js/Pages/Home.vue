<script setup>
import {Head} from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import IdCard from '@/Components/IdCard.vue'
</script>

<template>
    <MainLayout>
        <Head title="Home" />
        <div class="container mx-auto px-2 py-4 flex-grow flex items-center justify-center">

            <div class="flex justify-center items-center flex-col md:flex-row md:mb-0 lg:justify-center">
                <id-card />

                <section class="p-4 w-full md:w-1/2 lg:w-5/12 ml-4">
                    <h1 class="uppercase text-4xl text-center md:text-left">Welcome!</h1>
                    <div class="my-6 md:my-10 flex justify-center items-center flex-col md:flex-row md:justify-start">
                        <a href="/research" class="px-6 py-2 uppercase bg-pink-700 text-white hover:text-white hover:bg-hover-800 rounded-full mb-4 md:mb-0 md:mr-2">Publications</a>
                        <a href="/contact " class="px-6 py-2 uppercase bg-white text-gray-800 border border-gray-400 hover:text-gray-800 hover:bg-gray-100 rounded-full">Contact</a>
                    </div>

                    <div class="leading-6">
                        <p>Thank you for your visit!</p>

                        <p>I am a Research Associate at at the <a href="https://www.eui.eu">European University Institute</a>, where I coordinate the <a href="https://cmpf.eui.eu/media-pluralism-monitor/">Media Pluralism Monitor</a>. I completed my PhD on the right of access to information and proactive disclosure of public-sector data, their use and impact on corruption at the <a href="https://www.strath.ac.uk/humanities/governmentpublicpolicy/">University of Strathclyde</a>. My research interests also include studying other indicators of media freedom, e.g., whistle-blowers’ protection and the safety of journalists in physical and digital environment. My work cuts across disciplines and has been published in European Political Science Review and the International Journal of Press/Politics among other journals.</p>

                        <p>Before pursuing my PhD, I was a practitioner in the civil society sector. I helped build digital tools to improve public service delivery and facilitate interactions between political representatives, bureaucrats, and the public. As a believer in bridging academia and the policy world, I continue to engage in discussions with policymakers and public institutions. Lately, I have provided evidence to the UK Parliamentary Public Administration and Constitutional Affairs Committee on The Cabinet Office Freedom of Information Clearing House.</p>
                    </div>
                </section>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
