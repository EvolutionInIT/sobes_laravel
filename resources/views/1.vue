<script setup>
import { computed, ref, watch } from "vue";
import { useApartmentsStore } from "@/stores/apartments";

const aps = ref([]);
const store = useApartmentsStore();
const { apartments } = computed(() => store.apartments);

watch(
    () => apartments,
    (path) => {
        aps.value = apartments.value;
    },
    { immediate: true }
);
</script>

<template>
    <div>
        <h1>Apartments</h1>
        <div v-for="ap in aps" :key="ap.id">
            {{ ap.address }}
        </div>
    </div>
</template>
