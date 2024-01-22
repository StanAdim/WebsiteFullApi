<template>
    <div class="p-4">
        <h1 class="text-2xl font-semibold">Main Menu</h1>
        <ul class="mt-4">
            <li class="mb-2">
                <router-link to="/crm/dashboard" class="block hover:text-indigo-400">Home</router-link>
            </li>
            <li class="mb-2">
                <router-link to="/crm/posts/collection" class="block hover:text-indigo-400">Posts</router-link>
            </li>
            <li class="mb-2">
                <router-link to="/crm/banners/banner-collection" class="block hover:text-indigo-400">Banners</router-link>
            </li>
            <li class="mb-2">
                <router-link to="/crm/users/user-collection" class="block hover:text-indigo-400">Users</router-link>
            </li>
        </ul>
    </div>
</template>