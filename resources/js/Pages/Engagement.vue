<script setup>
import {Head} from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import PageLayout from '@/Layouts/PageLayout.vue'

const props = defineProps({ page: Object })
</script>

<template>
    <MainLayout>
        <Head title="Public Engagement" />
        <page-layout title="Public engagement" image="/img/na-pasi.jpeg">
            <h2 id="policy-engagement">Policy engagement<a href="https://committees.parliament.uk/writtenevidence/39649/pdf/"></a></h2>

            <p>Peer-review of the <a href="https://www.oznamovatelia.sk/wp-content/uploads/2023/01/funkcnost-vnutornych-systemov.pdf">Slovak Whistleblower Protection Office’ s analysis</a>, 2022</p>

            <p><a href="https://committees.parliament.uk/writtenevidence/39649/pdf/">Written evidence</a> to the UK Parliamentary Public Administration and Constitutional Affairs Committee on The Cabinet Office Freedom of Information Clearing House, 26 October 2021</p>

            <p><a href="https://parliamentlive.tv/event/index/046db903-c4c1-46cc-b8cf-b1f565ca9df1">Oral evidence</a> to the UK Parliamentary Public Administration and Constitutional Affairs Committee on The Cabinet Office Freedom of Information Clearing House, 26 October 2021</p>

            <h2 id="blog-posts">Blog posts</h2>

            <p>I governi devono considerare le leggi sull’accesso agli atti come opportunità, non come minacce. <a href="https://firenze.repubblica.it/cronaca/2023/09/27/news/firenze_iue_i_governi_devono_considerare_le_leggi_sullaccesso_agli_atti_come_opportunita_non_come_minacce-416021122/">La Repubblica</a>,  28 September 2023</p>

            <p>Access to public-sector information remains challenging in many European countries. <a href="https://cmpf.eui.eu/access-to-public-sector-information-remains-challenging-in-many-european-countries/">CMPF Blog</a>, 28 September 2023</p>

            <p>Better data and responsible political leaders are urgently needed to tackle violence against women journalists. <a href="https://cmpf.eui.eu/better-data-and-responsible-politicians-needed-to-tackle-violence-against-women-journalists/">CMPF Blog</a>, 25 November 2021</p>

            <p>The experience of journalists with the FOI process is often marked by delays, unresponsiveness, or refusals on unverifiable grounds. <a href="https://blogs.lse.ac.uk/politicsandpolicy/foia-journalists/">LSE British Politics and Policy Blog</a>, 25 May 2021</p>

        </page-layout>
    </MainLayout>
</template>

<style scoped>

</style>
