<template>
    <div>Index</div>
    <Link href="/hello">Show Page</Link>
    <div>this message is {{ message }} {{ test }}</div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    message: String,
    test: Number,
});
</script>
