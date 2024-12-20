<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

    const form = useForm({
        full_name: '',
        father_or_husband_name: '',
        gender: 'Male',
        contact_number_1: '',
        current_city: '',
        residential_address: '',
        email: '',
        date_of_birth: '',
        qualification: '',
        teaching_experience: '',
        tuition_duration: '',
        minimum_monthly_fee_home: '',
        currency: '',
        minimum_monthly_fee_online: '',
        specialties: '',
        home_tuition_type: '',
        referral_source: '',
        can_teach_professionals: false,
        query: '',
        additional_comments: '',
        google_map_location: '',
    });
</script>

<template>
    <AppLayout title="Add Tutor">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Add Tutor
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <form @submit.prevent="form.post('/tutors')">
                    <!-- Full Name -->
                    <div class="mb-4">
                        <label for="full_name" class="block text-gray-700">Full Name</label>
                        <input
                                id="full_name"
                                v-model="form.full_name"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Full Name -->
                    <div class="mb-4">
                        <label for="father_or_husband_name" class="block text-gray-700">father_or_husband_name</label>
                        <input
                                id="father_or_husband_name"
                                v-model="form.father_or_husband_name"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Full Name -->
                    <div class="mb-4">
                        <label for="contact_number_1" class="block text-gray-700">contact_number_1</label>
                        <input
                                id="contact_number_1"
                                v-model="form.contact_number_1"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Gender Dropdown -->
                    <div class="mb-4">
                        <label for="gender" class="block text-gray-700">Gender</label>
                        <select v-model="form.gender" class="w-full border-gray-300 rounded">
                            <option disabled value="">Please select one</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <!-- Full Name -->
                    <div class="mb-4">
                        <label for="current_city" class="block text-gray-700">current_city</label>
                        <input
                                id="current_city"
                                v-model="form.current_city"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Full Name -->
                    <div class="mb-4">
                        <label for="residential_address" class="block text-gray-700">residential_address</label>
                        <input
                                id="residential_address"
                                v-model="form.residential_address"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input
                                id="email"
                                v-model="form.email"
                                type="email"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Date of Birth -->
                    <div class="mb-4">
                        <label for="date_of_birth" class="block text-gray-700">Date of Birth</label>
                        <input
                                id="date_of_birth"
                                v-model="form.date_of_birth"
                                type="date"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Qualification -->
                    <div class="mb-4">
                        <label for="qualification" class="block text-gray-700">Qualification</label>
                        <input
                                id="qualification"
                                v-model="form.qualification"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Teaching Experience -->
                    <div class="mb-4">
                        <label for="teaching_experience" class="block text-gray-700">Teaching Experience</label>
                        <input
                                id="teaching_experience"
                                v-model="form.teaching_experience"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Tuition Duration -->
                    <div class="mb-4">
                        <label for="tuition_duration" class="block text-gray-700">Tuition Duration</label>
                        <input
                                id="tuition_duration"
                                v-model="form.tuition_duration"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Minimum Monthly Fee (Home) -->
                    <div class="mb-4">
                        <label for="minimum_monthly_fee_home" class="block text-gray-700">Minimum Monthly Fee (Home)</label>
                        <input
                                id="minimum_monthly_fee_home"
                                v-model="form.minimum_monthly_fee_home"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Currency -->
                    <div class="mb-4">
                        <label for="currency" class="block text-gray-700">Currency</label>
                        <input
                                id="currency"
                                v-model="form.currency"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Minimum Monthly Fee (Online) -->
                    <div class="mb-4">
                        <label for="minimum_monthly_fee_online" class="block text-gray-700">Minimum Monthly Fee (Online)</label>
                        <input
                                id="minimum_monthly_fee_online"
                                v-model="form.minimum_monthly_fee_online"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Specialties -->
                    <div class="mb-4">
                        <label for="specialties" class="block text-gray-700">Specialties</label>
                        <textarea
                                id="specialties"
                                v-model="form.specialties"
                                class="w-full border-gray-300 rounded"
                        ></textarea>
                    </div>

                    <!-- Home Tuition Type -->
                    <div class="mb-4">
                        <label for="home_tuition_type" class="block text-gray-700">Home Tuition Type</label>
                        <input
                                id="home_tuition_type"
                                v-model="form.home_tuition_type"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Referral Source -->
                    <div class="mb-4">
                        <label for="referral_source" class="block text-gray-700">Referral Source</label>
                        <input
                                id="referral_source"
                                v-model="form.referral_source"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>

                    <!-- Can Teach Professionals -->
                    <div class="mb-4">
                        <label class="block text-gray-700">
                            <input
                                    v-model="form.can_teach_professionals"
                                    type="checkbox"
                                    class="mr-2"
                            />
                            Can Teach Professionals
                        </label>
                    </div>

                    <!-- Query -->
                    <div class="mb-4">
                        <label for="query" class="block text-gray-700">Query</label>
                        <textarea
                                id="query"
                                v-model="form.query"
                                class="w-full border-gray-300 rounded"
                        ></textarea>
                    </div>

                    <!-- Additional Comments -->
                    <div class="mb-4">
                        <label for="additional_comments" class="block text-gray-700">Additional Comments</label>
                        <textarea
                                id="additional_comments"
                                v-model="form.additional_comments"
                                class="w-full border-gray-300 rounded"
                        ></textarea>
                    </div>

                    <!-- Google Map Location -->
                    <div class="mb-4">
                        <label for="google_map_location" class="block text-gray-700">Google Map Location</label>
                        <textarea
                                id="google_map_location"
                                v-model="form.google_map_location"
                                class="w-full border-gray-300 rounded"
                        ></textarea>
                    </div>

                    <button
                            type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        Save
                    </button>
                </form>
            </div>
        </div>
    </AppLayout>
</template>
