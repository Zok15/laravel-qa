<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <div class="p-6 max-w-2xl">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-2xl font-semibold">Ask a question</h1>
      <Link :href="route('questions.index')" class="text-sm underline">
        Back
      </Link>
    </div>

    <form class="space-y-4">
      <div>
        <label class="block text-sm font-medium mb-1">Title</label>
        <input
          type="text"
          class="w-full border rounded px-3 py-2"
          placeholder="Enter a clear, specific title"
        />
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Body</label>
        <textarea
          class="w-full border rounded px-3 py-2"
          rows="8"
          placeholder="Describe your question in detail"
        />
      </div>

      <div class="flex gap-2">
        <button type="submit" class="px-4 py-2 border rounded">
          Save
        </button>

        <Link :href="route('questions.index')" class="px-4 py-2 border rounded">
          Cancel
        </Link>
      </div>
    </form>
  </div>
</template>
