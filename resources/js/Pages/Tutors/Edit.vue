<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { useForm } from '@inertiajs/vue3';

    const props = defineProps({
        tutor: Object,
    });

    const form = useForm({
        ...props.tutor,
    });
</script>

<template>
    <AppLayout title="Edit Tutor">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Edit Tutor
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <form @submit.prevent="form.put(`/tutors/${form.id}`)">
                    <div class="mb-4">
                        <label for="full_name" class="block text-gray-700">Full Name</label>
                        <input
                                id="full_name"
                                v-model="form.full_name"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input
                                id="email"
                                v-model="form.email"
                                type="email"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>
                    <div class="mb-4">
                        <label for="current_city" class="block text-gray-700">Current City</label>
                        <input
                                id="current_city"
                                v-model="form.current_city"
                                type="text"
                                class="w-full border-gray-300 rounded"
                        />
                    </div>
                    <button
                            type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        Save Changes
                    </button>
                </form>
            </div>
        </div>
    </AppLayout>
</template>
