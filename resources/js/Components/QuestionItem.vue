<script setup>
import { Link } from '@inertiajs/vue3'
import dayjs from 'dayjs'
import relativeTime from 'dayjs/plugin/relativeTime'
import QuestionStats from '@/Components/QuestionStats.vue'

dayjs.extend(relativeTime)

defineProps({
  q: { type: Object, required: true },
})
</script>

<template>
  <div class="border rounded p-4">
    <div class="flex items-start justify-between gap-6">
      <QuestionStats :votes="q.votes" :answers="q.answers" :views="q.views" />

      <div class="flex-1">
        <h2 class="text-lg font-medium">
          <Link :href="route('questions.show', q.slug)" class="hover:underline">
            {{ q.title }}
          </Link>
        </h2>

        <div class="text-sm text-gray-600 mt-2">
          by {{ q.user?.name ?? '—' }} • {{ dayjs(q.created_at).fromNow() }}
        </div>
      </div>
    </div>
  </div>
</template>
