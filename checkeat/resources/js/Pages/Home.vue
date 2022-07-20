<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div
        class="w-full flex justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
        <div
            v-if="canLogin"
            class="hidden fixed top-0 right-0 px-6 py-4 sm:block"
        >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="inline-block text-lg font-black text-red-700 border-2 border-red-700 rounded p-2"
            >
                Tableau de bord
            </Link>

            <template v-else>
                <div class="">
                    <p
                        class="inline-block mr-4 text-lg font-black text-red-700 p-2"
                    >
                        Devenez un de nos partenaires restaurateur
                    </p>

                    <Link
                        :href="route('login')"
                        class="inline-block text-lg font-black text-red-700 border-2 border-red-700 rounded p-2"
                    >
                        Connexion
                    </Link>

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="inline-block ml-4 text-lg font-black text-red-700 border-2 border-red-700 rounded p-2"
                    >
                        Inscription
                    </Link>
                </div>
            </template>
        </div>
    </div>

    <div class="wrapper h-screen bg-no-repeat bg-center bg-cover">
        <div
            class="h-screen flex-col flex items-center justify-around"
            style="
                background-image: url('https://images.unsplash.com/photo-1543007631-283050bb3e8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80');
            "
        >
            <div
                class="title drop-shadow-lg shadow-black mt-36 font-extrabold text-8xl text-transparent bg-clip-text bg-gradient-to-r from-red-700 to-pink-600 p-2 drop-shadow-lg shadow-black"
            >
                Check'EAT
            </div>

            <div
                class="title text-gray-200 font-black text-5xl p-2 drop-shadow-lg shadow-black"
            >
                Bienvenue sur la plateforme de vos restaurants préférés
            </div>

            <h3 class="text-red-600 font-black text-2xl underline mt-10 pt-10">
                Cherchez votre restaurant
            </h3>

            <button
                class="mb-32 font-black text-xl animate-bounce w-60 text-gray-200 bg-gradient-to-r from-red-700 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 rounded-lg px-5 py-2.5 text-center mr-2"
            >
                Here we GOOO
            </button>
        </div>
    </div>
</template>
