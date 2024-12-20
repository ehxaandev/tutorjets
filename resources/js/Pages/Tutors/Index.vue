<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/vue3';

    const props = defineProps({
        tutors: Array,
    });
</script>

<template>
    <AppLayout title="Tutors">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Tutors
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="mb-4 flex justify-end">
                    <Link
                            href="/tutors/create"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        Add New Tutor
                    </Link>
                </div>

                <table class="min-w-full bg-white border dark:bg-gray-800">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 border">Name</th>
                        <th class="py-2 px-4 border">Email</th>
                        <th class="py-2 px-4 border">City</th>
                        <th class="py-2 px-4 border">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr
                            v-for="tutor in tutors"
                            :key="tutor.id"
                            class="border-t dark:border-gray-700"
                    >
                        <td class="py-2 px-4 border">{{ tutor.full_name }}</td>
                        <td class="py-2 px-4 border">{{ tutor.email }}</td>
                        <td class="py-2 px-4 border">{{ tutor.current_city }}</td>
                        <td class="py-2 px-4 border">
                            <Link
                                    :href="`/tutors/${tutor.id}/edit`"
                                    class="text-blue-500 hover:underline"
                            >
                                Edit
                            </Link>
                            |
                            <form
                                    :action="`/tutors/${tutor.id}`"
                                    method="POST"
                                    @submit.prevent="confirm('Are you sure?') && $event.target.submit()"
                                    class="inline"
                            >
                                <input type="hidden" name="_method" value="DELETE" />
                                <button
                                        type="submit"
                                        class="text-red-500 hover:underline"
                                >
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AppLayout>
</template>

