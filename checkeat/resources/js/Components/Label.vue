<script setup>
defineProps(["value"]);
</script>

<template>
    <label class="block font-black text-sm text-red-600">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
