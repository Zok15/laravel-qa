<script setup>
import { Link } from '@inertiajs/vue3'
import dayjs from 'dayjs'
import relativeTime from 'dayjs/plugin/relativeTime'
import QuestionStats from '@/Components/QuestionStats.vue'
import QuestionItem from '@/Components/QuestionItem.vue'

dayjs.extend(relativeTime)

defineProps({
    questions: Object,
})
</script>

<template>
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">All Questions</h1>

            <Link :href="route('questions.create')" class="px-3 py-2 border rounded">
                Ask Question
            </Link>
        </div>

        <div class="space-y-4">
            <QuestionItem v-for="q in questions.data" :key="q.id" :q="q" />
        </div>

        <!-- пагинация простая -->
        <div class="flex gap-2 mt-8">
            <Link v-for="link in questions.links" :key="link.url ?? link.label" :href="link.url ?? ''"
                v-html="link.label" class="px-3 py-1 border rounded"
                :class="{ 'opacity-50 pointer-events-none': !link.url, 'font-bold': link.active }" />
        </div>
    </div>
</template>
