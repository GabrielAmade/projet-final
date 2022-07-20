<script setup>
import BreezeButton from "@/Components/Button.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: "",
    phone: "",
    email: "",
    adress: "",
    zip: "",
    city: "",
    capacity: "",
    hours: "",
    // picture: "",
    terms: false,
});

const submit = () => {
    form.post(route("sendResto"), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Creation de Restaurant" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel
                    for="name"
                    value="Nom du restaurant"
                    class="text-red-700 font-black"
                />
                <BreezeInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />
            </div>
            <div>
                <BreezeLabel
                    for="phone"
                    value="Téléphone"
                    class="text-red-700 font-black"
                />
                <BreezeInput
                    id="phone"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.phone"
                    required
                    autofocus
                    autocomplete="phone"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel
                    for="email"
                    value="Email"
                    class="text-red-700 font-black"
                />
                <BreezeInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel
                    for="adress"
                    value="Adresse du restaurant"
                    class="text-red-700 font-black"
                />
                <BreezeInput
                    id="adress"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.adress"
                    required
                    autocomplete="adress"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel
                    for="zip"
                    value="Code Postal"
                    class="text-red-700 font-black"
                />
                <BreezeInput
                    id="zip"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.zip"
                    required
                    autocomplete="zip"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel
                    for="city"
                    value="Ville"
                    class="text-red-700 font-black"
                />
                <BreezeInput
                    id="city"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.city"
                    required
                    autocomplete="city"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel
                    for="capacity"
                    value="Numéro de table"
                    class="text-red-700 font-black"
                />
                <BreezeInput
                    id="capacity"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.capacity"
                    required
                    autocomplete="capacity"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel
                    for="hours"
                    value="Horaires d'ouverture"
                    class="text-red-700 font-black"
                />
                <BreezeInput
                    id="hours"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.hours"
                    required
                    autocomplete="hours"
                />
            </div>

<<<<<<< HEAD
            <!-- <div class="mt-4">
                <BreezeLabel for="picture" value="Sélectionner votre image :" />
                <BreezeInput
                    id="picture"
                    type="file"
                    class="mt-1 block w-full"
                    v-model="form.picture"
                    required
                    autocomplete="picture"
                />
            </div> -->

            <div class="flex items-center justify-end mt-4">
=======
            <div class="flex items-center justify-center mt-4">
>>>>>>> phil1
                <BreezeButton
                    class="ml-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Ajouter
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
