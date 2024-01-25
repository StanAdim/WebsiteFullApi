<script  setup>
definePageMeta({
  layout: 'auth-layout'
})
const users = ref({});
async function systemUsers (){
  const {data,error} = await useApiFetch('/api/auth/users')
  users.value = data.value
  console.log(data.value , error);
}
</script>
<template>
   <h1 class="text-2xl font-semibold">New User</h1>
    <p>Register new user</p> 

    <div class="min-h-screen bg-blue-100 flex flex-col justify-center py-3 sm:px-6 lg:px-3">
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
      <crm-user-register></crm-user-register>
    </div>
  </div>
</template>

<style scoped></style>
