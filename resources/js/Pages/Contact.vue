<script setup>
import {Head} from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import PageLayout from '@/Layouts/PageLayout.vue'
import SocialLinks from '@/Components/SocialLinks.vue'

import useVuelidate from '@vuelidate/core'
import { email, maxLength, minLength, required } from '@vuelidate/validators'
import { computed, reactive } from 'vue'

const props = defineProps({ page: Object })

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

    console.log('valid form, ready to submit')
}
</script>

<template>
    <MainLayout>
        <Head :title="page.title" />
        <page-layout :title="page.title" :image="page.image">
            <div class="text-center mb-6">
                <social-links/>
            </div>

            <form @submit.prevent="handleForm" id='contact_form' method='POST' name='contact_form'><input type='hidden' name='form-name' value='contact_form' />
                <div class="mb-6">
                    <div class="form_input">
                        <label for="name">Your name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            :class="v$.name.$errors.length ?
                            'border-red-500 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50':
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
                            placeholder="Enter your name"
                            v-model.trim="form.name"
                        >
                        <span
                            v-if="v$.name.$errors.length"
                            class="text-xs text-red-600">{{v$.name.$errors[0].$message}}
                        </span>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="form_input">
                        <label for="email">Your email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            :class="v$.email.$errors.length ?
                            'border-red-500 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50':
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
                            placeholder="Enter your email"
                            v-model.trim="form.email"
                        >
                        <span
                            v-if="v$.email.$errors.length"
                            class="text-xs text-red-600">{{v$.email.$errors[0].$message}}
                        </span>
                    </div>
                </div>

                <div class="">
                    <div class="form_input">
                        <label for="message">Your message</label>
                        <textarea
                            id="message"
                            rows="5"
                            name="message"
                            :class="v$.message.$errors.length ?
                            'border-red-500 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50':
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
                            placeholder="Enter your message"
                            v-model.trim="form.message">
                        </textarea>
                        <span
                            v-if="v$.message.$errors.length"
                            class="text-xs text-red-600">{{v$.message.$errors[0].$message}}
                        </span>
                    </div>
                </div>

                <div class="mt-6 text-right">
                    <button type="submit" class="bg-green-400 text-white border-green-400 shadow hover:text-white hover:bg-green-500 px-8 py-3 uppercase">Send</button>
                </div>
            </form>
        </page-layout>
    </MainLayout>
</template>

<style scoped>

</style>
