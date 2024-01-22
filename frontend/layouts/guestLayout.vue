<script lang="ts" setup></script>

<template>
<div class="min-h-screen bg-blue-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-10 w-auto" src="/uploads/banners/img4.png" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
           Sign In
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <slot />
    </div>
</div>
</template>

<style>
@import '@/assets/css/tailwind.css';
</style>
