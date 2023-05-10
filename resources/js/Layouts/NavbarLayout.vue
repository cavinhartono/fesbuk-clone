<script setup>
import { ref } from "vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";
import Header from "@/components/Header.vue";
import Navbar from "@/components/Navbar.vue";

import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
const { isPostOverlay, isCropperModal, isImageDisplay } = storeToRefs(
    useGeneralStore()
);

let showMenu = ref(false);
</script>

<template>
    <Header />
    <Navbar />
</template>
