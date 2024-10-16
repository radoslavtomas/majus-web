<script setup>
import {Head} from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import PageLayout from '@/Layouts/PageLayout.vue'
</script>

<template>
    <MainLayout>
        <Head title="Teaching" />
        <page-layout title="Teaching" image="/img/jadran.jpeg">
            <p>During my PhD studies, I worked as a teaching assistant for the following courses on research methods and introduction to political science.</p>

            <h2 id="phd-level">PhD level</h2>

            <ul>
                <li><strong>Quantitative text analysis</strong> (8h in 2020)
                    <br />University of Strathclyde, course coordinator: Dr Zac Greene<br /></li>
            </ul>

            <h2 id="undergraduate-level">Undergraduate level</h2>

            <ul>
                <li><strong>L2305: Research Methods for Political Scientists</strong> (40h in 2016 and 2017)
                    <br />fall 2016 (focus on quantitative methods) and fall 2017 (focus on research design, ethics and qualitative methods)
                    <br />University of Strathclyde, course coordinators: Dr Heinz Brandenburg and Dr Mark Shephard<br /></li>
                <li><strong>L2103: Politics 1b</strong> (12h in 2016)
                    <br />University of Strathclyde, course coordinator: Dr Gabriela Borz<br /></li>
                <li><strong>L2102: Politics 1a</strong> (12h in 2015)
                    <br />University of Strathclyde, course coordinator: Dr Gabriela Borz<br /></li>
            </ul>

            <h2 id="teaching-approach">Teaching approach</h2>

            <p>I am committed to creating an inclusive and open learning environment where students are encouraged to engage and express their views. I am aware that students might come from different backgrounds and their preparedness for university and the level of support they need might vary considerably. I work with them with this understanding in mind.</p>
        </page-layout>
    </MainLayout>
</template>

<style scoped>

</style>
