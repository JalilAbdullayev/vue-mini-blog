<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
  post: Object,
});
</script>

<template>
  <AppLayout>
    <div class="max-w-3xl mx-auto mt-5">
      <img
        :src="`/storage/${post.thumbnail}`"
        :alt="post.alt_text"
        class="rounded-sm object-contain"
      />
      <small class="space-y-3 font-mono text-sm" v-if="post.caption">
        {{ post.caption }}
      </small>
      <div v-for="category in post.categories">
        <div
          class="badge"
          :style="`background-color: ${category.bg_color}; color: ${category.text_color};`"
        >
          {{ category.title }}
        </div>
      </div>
      <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
        {{ post.title }}
      </h1>
      <article
        class="mt-4 text-gray-600 dark:text-gray-400"
        v-html="post.content"
      ></article>
    </div>
  </AppLayout>
</template>
