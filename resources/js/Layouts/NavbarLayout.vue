<script setup>
import { ref } from "vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";
import Header from "@/components/Header.vue";
import Home from "vue-material-design-icons/Home.vue";
import HomeOutline from "vue-material-design-icons/HomeOutline.vue";
import TelevisionPlay from "vue-material-design-icons/TelevisionPlay.vue";
import StoreFrontOutline from "vue-material-design-icons/StoreFrontOutline.vue";
import AccountGroup from "vue-material-design-icons/AccountGroup.vue";
import ControllerClassicOutline from "vue-material-design-icons/ControllerClassicOutline.vue";
import DotsGrid from "vue-material-design-icons/DotsGrid.vue";
import FacebookMessenger from "vue-material-design-icons/FacebookMessenger.vue";
import Bell from "vue-material-design-icons/Bell.vue";
import Logout from "vue-material-design-icons/Logout.vue";

import { useGeneralStore } from "@/stores/index";
import { storeToRefs } from "pinia";
const { isPostOverlay, isCropperModal, isImageDisplay } = storeToRefs(
    useGeneralStore()
);

let showMenu = ref(false);
</script>

<template>
    <Header />
</template>
