<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    post: Object
});
</script>

<template>
    <AppLayout>
        <div class="max-w-3xl mx-auto">
            <img :src="`/storage/${post.thumbnail}`" :alt="post.alt_text" />
            <small class="space-y-3 font-mono text-sm" v-if="post.caption">
                {{ post.caption }}
            </small>
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                {{ post.title }}
            </h1>
            <article class="mt-4 text-gray-600 dark:text-gray-400" v-html="post.content"></article>
        </div>
    </AppLayout>
</template>