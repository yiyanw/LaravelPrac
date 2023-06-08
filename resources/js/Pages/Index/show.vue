<template>
    <div>
        <Price :price="listing.price" class="text-2xl font-bold" />
        <ListingSpace :listing="listing" class="text-lg"></ListingSpace>
        <ListingAddress :listing="listing" class="text-gray-400" />
    </div>
    <Link href="/">Main Page</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "../../layout/MainLayout.vue";
</script>
