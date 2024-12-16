<script setup>
import {Head, Link} from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import PostCard from "@/Components/PostCard.vue";

defineProps({
    posts: Array
})
</script>

<template>
    <Head title="Welcome"/>
    <AppLayout>
        <div class="p-20 grid grid-cols-3 gap-4">
            <PostCard v-for="post in posts" :key="post.slug" :post="post"/>
        </div>
    </AppLayout>
</template>
