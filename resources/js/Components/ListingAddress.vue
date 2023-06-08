<template>
    <div>
        {{ listing.street_nr }}, {{ listing.street }}, {{ listing.city }}, for
        ${{ listing.price }}
    </div>
</template>

<script setup>
defineProps({
    listing: Object,
});
</script>
