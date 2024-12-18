<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    category: Object
})
</script>

<template>
    <AppLayout>
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                {{ category.title }}
            </h1>
            <article class="mt-4 text-gray-600 dark:text-gray-400" v-html="category.content"></article>
        </div>
    </AppLayout>
</template>