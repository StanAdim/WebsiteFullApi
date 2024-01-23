<script setup>
let drawerState = ref(true)
const toggleDrawer = ()=>{
  drawerState.value ? drawerState.value = !drawerState.value : drawerState.value = !drawerState.value
  console.log(drawerState.value)
}

</script>

<template>
<div class="bg-gray-100">
<div class="h-screen flex overflow-hidden bg-gray-200">
    <!-- Sidebar -->
    <div @click="toggleDrawer()" class="absolute bg-gray-800 text-white w-56 
        min-h-screen overflow-y-auto transition-transform transform  ease-in-out duration-300"
        :class="{'-translate-x-full':drawerState}"
        id="sidebar">
        <button @click="toggleDrawer()" class="text-gray-500 hover:text-gray-600" id="open-sidebar">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <!-- Your Sidebar Content -->
       <crm-sidebar />
    </div>
    <!-- Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Navbar -->
        <div class="bg-white shadow">
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-4 px-2">
                    <h1 class="text-xl font-semibold">Admin Website Control</h1>
                    <button @click="toggleDrawer()" class="text-gray-500 hover:text-gray-600" id="open-sidebar">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Content Body -->
        <div class="flex-1 overflow-auto p-10 bg-sky-100">
           <slot />
        </div>
    </div>
</div>
</div>
</template>

<style>
@import '@/assets/css/tailwind.css';
</style>
