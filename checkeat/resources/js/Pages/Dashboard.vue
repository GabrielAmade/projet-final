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
            <div class="max-w-7xl mx-auto h-full sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="flex flex-wrap -m-4">
                                    <div class="xl:w-1/4 md:w-1/2 p-4">
                                        <div class="bg-gray-100 p-6 rounded-lg">
                                            <img
                                                class="h-40 rounded w-full object-cover object-center mb-6"
                                                src="https://dummyimage.com/720x400"
                                                alt="content"
                                            />
                                            <h3
                                                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
                                            >
                                                Restaurant
                                            </h3>
                                            <h2
                                                class="text-lg text-gray-900 font-medium title-font mb-4"
                                            >
                                                Nom Restaurant
                                            </h2>
                                            <div
                                                class="container-button flex-col flex align-items-center"
                                            >
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-1"
                                                >
                                                    Details restaurant
                                                </button>
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-1"
                                                >
                                                    Voir le menu
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
