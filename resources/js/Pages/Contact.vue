<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import PageLayout from '@/Layouts/PageLayout.vue'
import SocialLinks from '@/Components/SocialLinks.vue'

import useVuelidate from '@vuelidate/core'
import { email, maxLength, minLength, required } from '@vuelidate/validators'
import { computed, reactive, useTemplateRef } from 'vue'

const props = defineProps({ page: Object })

const contactForm = useTemplateRef('contact-form')

let form = reactive({
    name: '',
    email: '',
    message: '',
})

const rules = computed(() => {
    return {
        name: { required, minLength: minLength(2), maxLength: maxLength(32) },
        email: { required, email, maxLength: maxLength(100) },
        message: { required, minLength: minLength(2), maxLength: maxLength(100) },
    }
})

const v$ = useVuelidate(rules, form, { $scope: false })

const handleForm = async () => {
    const result = await v$.value.$validate()

    if (!result) {
        const el = document.getElementsByClassName('focus:border-red-300')[0]
        setTimeout(() => {
            el.scrollIntoView({ behavior: 'smooth' })
        }, 100)
        return
    }

    contactForm.value.submit()
}
</script>

<template>
    <MainLayout>
        <Head :title="page.title"/>
        <page-layout :image="page.image" :title="page.title">
            <div class="text-center mb-6">
                <social-links/>
            </div>

            <form
                id='contact_form'
                ref="contact-form"
                action="https://formspree.io/f/xgveveej"
                method="POST"
                name='contact_form'
                @submit.prevent="handleForm">

                <input name='form-name' type='hidden' value='contact_form'/>

                <div class="mb-6">
                    <div class="form_input">
                        <label for="name">Your name</label>
                        <input
                            id="name"
                            v-model.trim="form.name"
                            :class="v$.name.$errors.length ?
                            'border-red-500 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50':
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
                            name="name"
                            placeholder="Enter your name"
                            type="text"
                        >
                        <span
                            v-if="v$.name.$errors.length"
                            class="text-xs text-red-600">{{ v$.name.$errors[0].$message }}
                        </span>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="form_input">
                        <label for="email">Your email</label>
                        <input
                            id="email"
                            v-model.trim="form.email"
                            :class="v$.email.$errors.length ?
                            'border-red-500 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50':
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
                            name="email"
                            placeholder="Enter your email"
                            type="email"
                        >
                        <span
                            v-if="v$.email.$errors.length"
                            class="text-xs text-red-600">{{ v$.email.$errors[0].$message }}
                        </span>
                    </div>
                </div>

                <div class="">
                    <div class="form_input">
                        <label for="message">Your message</label>
                        <textarea
                            id="message"
                            v-model.trim="form.message"
                            :class="v$.message.$errors.length ?
                            'border-red-500 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50':
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
                            name="message"
                            placeholder="Enter your message"
                            rows="5">
                        </textarea>
                        <span
                            v-if="v$.message.$errors.length"
                            class="text-xs text-red-600">{{ v$.message.$errors[0].$message }}
                        </span>
                    </div>
                </div>

                <div class="mt-6 text-right">
                    <button
                        class="bg-green-400 text-white border-green-400 shadow hover:text-white hover:bg-green-500 px-8 py-3 uppercase"
                        type="submit">
                        Send
                    </button>
                </div>
            </form>
        </page-layout>
    </MainLayout>
</template>

<style scoped>

</style>
