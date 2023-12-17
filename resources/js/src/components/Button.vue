<template>
  <router-link 
    :to="{ name: link, params: { id: id ? id : '' }}" 
    :class="[ typeButton == 'success' ? 'bg-blue-700 hover:bg-blue-800 focus:ring-blue-300' : ' bg-red-700 hover:bg-red-800 focus:ring-red-300' ]"  class="text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none"
    >
    {{ label }}
  </router-link>
</template>

<script>
  export default {
    name: 'Button',
    props: ['label','link', 'id', 'typeButton']
  }
</script>