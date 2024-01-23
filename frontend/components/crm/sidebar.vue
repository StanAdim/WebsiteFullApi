<template>
    <div class="p-4">
        <h1 class="text-2xl font-semibold">Main Menu</h1>
        <ul class="mt-4">
            <hr class=" bg-teal-400 py-0.5">
            <li class="my-1 text-center hover:bg-teal-200">
                <router-link to="/crm/dashboard" class="block hover:text-indigo-700">Home</router-link>
            </li><hr class=" bg-teal-400 py-0.5">
            <li class="my-1 text-center hover:bg-teal-200">
                <router-link to="/crm/posts/collection" class="block hover:text-indigo-700">Posts</router-link>
            </li> <hr class=" bg-teal-400 py-0.5" />
            <li class="my-1 text-center hover:bg-teal-200">
                <router-link to="/crm/banners/banner-collection" class="block hover:text-indigo-700">Banners</router-link>
            </li> <hr class=" bg-teal-400 py-0.5" />
            <li class="my-1 text-center hover:bg-teal-200">
                <router-link to="/crm/users/user-collection" class="block hover:text-indigo-700">Users</router-link>
            </li> <hr class=" bg-teal-400 py-0.5" />
            <li class="my-1 text-center hover:bg-teal-200">
                <router-link to="/crm/leaders/leader-collection" class="block hover:text-indigo-700">Leaders</router-link>
            </li> <hr class=" bg-teal-400 py-0.5" />
        </ul>
    </div>
</template>