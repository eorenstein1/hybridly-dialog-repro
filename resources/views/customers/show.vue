<script setup lang="ts">
defineProps<{
    customer: {
        id: number
        company_id: number
    }
}>()
</script>

<template>
    <h1>Customer {{ customer.id }}</h1>
</template>
