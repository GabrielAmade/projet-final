<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <!-- <template #header>
            <h2 class="font-black text-xl text-red-800 leading-tight">
                Accueil
            </h2>
        </template> -->

        <div
            class="py-12 bg-gray-900 bg-no-repeat bg-center bg-cover"
            style="
                background-image: url('https://images.unsplash.com/photo-1543007631-283050bb3e8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80');
            "
        >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-2"
                >
                    <div
                        class="p-6 bg-gray-800 flex justify-between align-item-center"
                    >
                        <p class="pt-2 text-2xl font-black text-red-700">
                            Mes Restaurants
                        </p>
                        <!-- <button>
                            <a :href="route('createResto')">Ajouter</a>
                        </button> -->

                        <Link
                            :href="route('createResto')"
                            class="text-lg font-black text-red-700 border-2 border-red-700 rounded p-2"
                        >
                            + Ajouter
                        </Link>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl bg-opacity-25 mx-auto h-full sm:px-6 lg:px-8">
                <div
                    class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 bg-gray-800">
                        <section class="text-gray-700 body-font">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="flex flex-wrap -m-4">
                                    <div class="xl:w-1/4 md:w-1/2 p-4">
                                        <div
                                            class="bg-gray-600 border-2 border-red-700 p-6 rounded-lg"
                                        >
                                            <img
                                                class="h-40 rounded w-full object-cover object-center mb-6"
                                                src="https://dummyimage.com/720x400"
                                                alt="content"
                                            />
                                            <h3
                                                class="tracking-widest text-pink-500 text-xs font-medium title-font underline"
                                            >
                                                Restaurant
                                            </h3>
                                            <h2
                                                class="text-lg font-black text-red-700 title-font mb-4"
                                            >
                                                Nom Restaurant
                                            </h2>
                                            <div
                                                class="container-button flex-col flex align-items-center"
                                            >
                                                <button
                                                    class="bg-gradient-to-r from-red-700 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 text-white font-bold py-2 px-4 rounded m-1"
                                                >
                                                    Details restaurant
                                                </button>
                                                <button
                                                    class="bg-gradient-to-r from-red-700 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 text-white font-bold py-2 px-4 rounded m-1"
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
