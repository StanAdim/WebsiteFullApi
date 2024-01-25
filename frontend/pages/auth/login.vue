<script  type="ts" setup>
import {useAuthStore} from '@/store/useAuthStore'
definePageMeta({
  layout: 'guest-layout',
})
const auth = useAuthStore();
const  userCredentials  = ref({
  email: 'adim@adim.com',
  password: 'passpass'
});

async function handleLogin(){
  await auth.login(userCredentials)
}
</script>
<template>
 <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
    <form @submit.prevent="handleLogin">
        <div class="mt-6">
            <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Email</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="email" 
                v-model="userCredentials.email" placeholder="Enter your email" type="email" 
                class="email-input">
                <div class="hidden absolute inset-y-0 right-0 pr-3 
                items-center pointer-events-none">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
      <div class="mt-6">
            <label for="password" class="block text-sm font-medium leading-5
              text-gray-700">Password</label>
            <div class="mt-1 rounded-md shadow-sm">
                <input id="password" 
                v-model="userCredentials.password" 
                type="password" 
                class="appearance-none block w-full px-3 py-2 
                border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none 
                focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
            </div>
        </div>
        <div class="mt-6">
            <span class="block w-full rounded-md shadow-sm">
            <button type="submit" class="btn-login">
              Sign In
            </button>
          </span>
        </div>
    </form>
  </div>
</template>

<style scoped>
.btn-login {
  @apply w-full flex justify-center py-2 px-4 border border-transparent text-sm 
  font-medium rounded-md 
  text-white bg-blue-600 hover:bg-blue-500 focus:outline-none  
  focus:border-indigo-700  active:bg-indigo-700 transition duration-150 ease-in-out 
}

.email-input{
  @apply appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md 
  placeholder-gray-400 focus:outline-none  
  focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5
}

</style>
