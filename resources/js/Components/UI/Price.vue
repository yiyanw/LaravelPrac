<template>
    <span>{{ formatedPrice }}</span>
</template>

<script setup>
import { computed } from "vue";
const props = defineProps({
    price: [Number, String],
});

console.log(props.value);
const formatedPrice = computed(() =>
    Number(props.price).toLocaleString("en-US", {
        style: "currency",
        currency: "USD",
        maximumFractionDigits: 0,
    })
);
</script>
