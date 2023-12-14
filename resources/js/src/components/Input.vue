<template>
 <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">{{ label }}</label>
    <input
      :type="type"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:border-blue-500"
      :value="value"
      @input="$emit('update:value', $event.target.value)"
    />
  </div>
</template>

<script setup>
  defineProps(['label', 'type', 'value'])
  defineEmits(['update:value'])
</script>