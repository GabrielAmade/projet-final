<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Accueil
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        class="p-6 bg-white border-b border-gray-200 flex justify-between"
                    >
                        <p class="text-lg font-black">Mes Restaurants</p>
                        <!-- <button>
                            <a :href="route('createResto')">Ajouter</a>
                        </button> -->

                        <Link
                            :href="route('createResto')"
                            class="text-lg font-black text-red-700 border-2 border-red-700 rounded p-2"
                        >
                            Ajouter
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
