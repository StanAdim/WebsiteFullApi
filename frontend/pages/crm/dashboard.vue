<script lang="ts" setup>
definePageMeta({
  layout: 'auth-layout'
})

const users = ref({})
await useApiFetch('/sanctum/csrf-cookie');
async function getUsers (){
  const {data} = await useApiFetch('/api/users')
  console.log(data.value)
}

</script>
<template>
  <pre>{{ users }}</pre>
   <h1 class="text-2xl font-semibold" @click="getUsers">Dashboard page</h1>
   <pre></pre>
    <p>Dashboard page</p>
</template>

<style scoped></style>
