<template>
    <div class="flex-col-reverse md:grid grid-cols-12 gap-4">
        <Box class="md:col-span-7 flex items-center w-full">
            <div class="w-full font-medium text-center text-gray-500">
                No images
            </div>
        </Box>
        <div class="md:col-span-5 flex-col gap-4">
            <Box>
                <template #header> Basic info </template>
                <Price :price="listing.price" class="text-2xl font-bold" />
                <ListingSpace :listing="listing" class="text-lg"></ListingSpace>
                <ListingAddress :listing="listing" class="text-gray-400" />
            </Box>
            <Box>
                <template #header> Offer </template>
                Make a offer
            </Box>
        </div>
    </div>
</template>

<script setup>
import ListingAddress from "../../Components/ListingAddress.vue";
import ListingSpace from "../../Components/UI/ListingSpace.vue";
import Price from "../../Components/UI/Price.vue";
import Box from "../../Components/UI/box.vue";

defineProps({
    listing: Object,
});
</script>
