<script setup>
defineProps({
    image: {
        type: String,
        required: false
    },
    title: {
        type: String,
        required: true
    }
})
</script>

<template>
    <article class="container mx-auto px-2 py-8">
        <div v-if="image"
             class="hero-image h-32 sm:h-48 lg:h-56 px-8 w-full md:w-4/5 mx-auto"
             :style="{ backgroundImage: 'url(' + `${image}` + ')' }">
        </div>

        <header class="py-2 w-full md:w-4/5 mx-auto mt-4">
            <h1 class="text-2xl text-gray-700 border-b border-gray-700 pb-1 text-center">{{title}}</h1>
        </header>

        <div class="mx-auto w-full md:w-4/5 lg:w-3/5 p-4">

            <slot/>

        </div>
    </article>
</template>

<style scoped>

</style>
