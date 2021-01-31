<template>
    <div class="flex flex-col w-full h-screen justify-center items-center">
        <h1 class="text-7xl">Laravue SPA</h1>
        <a href="https://github.com/aryawpratama/LaravueJetstream-RolePermission" class="text-lg mt-16 text-blue-600 underline">Github</a>
        <h1 class="mt-4">powered by :</h1>
        <div class="flex flex-row justify-center items-center flex-md-wrap h-20 w-full">
            <img class="rounded-md h-10 w-auto ml-2 mr-2" src="img/laravel.svg" alt="">
            <img class="rounded-md h-10 w-auto ml-2 mr-2" src="img/jetstream.webp" alt="">
            <img class="h-10 w-auto ml-2 mr-2" src="img/vue.svg" alt="">
            <img class="rounded-md h-10 w-auto ml-2 mr-2" src="img/inertia.png" alt="">
            <img class="rounded-md h-10 w-auto ml-2 mr-2" src="img/spatie.jpg" alt="">
        </div>
        <div class="mt-10 flex flex-row justify-center items-center w-full h-20">
            <inertia-link class="mr-2 rounded-md h-10 w-14 flex items-center justify-center bg-blue-600 hover:bg-blue-800 text-white" href="login">Login</inertia-link>
            <inertia-link class="ml-2 rounded-md h-10 w-20 flex items-center justify-center bg-blue-600 hover:bg-blue-800 text-white" href="register">Register</inertia-link>
        </div>
    </div>
</template>