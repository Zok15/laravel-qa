<script setup>
const props = defineProps({
  votes: { type: Number, required: true },
  answers: { type: Number, required: true },
  views: { type: Number, required: true },
})

const answersClass = (count) =>
  count > 0
    ? 'border border-green-600 text-green-700'
    : 'border border-gray-300 text-gray-600'
</script>

<template>
  <div class="flex gap-3 text-sm">
    <div class="text-center min-w-[70px] text-gray-600">
      <div class="font-semibold text-gray-900">{{ votes }}</div>
      <div>votes</div>
    </div>

    <div class="text-center min-w-[70px] rounded px-2 py-1" :class="answersClass(answers)">
      <div class="font-semibold">{{ answers }}</div>
      <div>answers</div>
    </div>

    <div class="text-center min-w-[70px] text-gray-600">
      <div class="font-semibold text-gray-900">{{ views }}</div>
      <div>views</div>
    </div>
  </div>
</template>
