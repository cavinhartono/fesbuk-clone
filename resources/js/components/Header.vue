<script setup>
import Facebook from "vue-material-design-icons/Facebook.vue";
import Magnify from "vue-material-design-icons/Magnify.vue";
import Home from "vue-material-design-icons/Home.vue";
import HomeOutline from "vue-material-design-icons/HomeOutline.vue";
import AccountGroup from "vue-material-design-icons/AccountGroup.vue";
import TelevisionPlay from "vue-material-design-icons/TelevisionPlay.vue";
import StoreFrontOutline from "vue-material-design-icons/StoreFrontOutline.vue";
</script>

<template>
    <header
        class="fixed top-0 left-0 w-full px-2 py-[100px] flex justify-between items-center bg-white"
    >
        <div class="flex items-center gap-4">
            <span class="icon">
                <Facebook />
            </span>
            <div class="flex items-center gap-2">
                <div class="w-0 bg-white overflow-hidden">
                    <input type="text" class="field" />
                </div>
                <div class="iconBx">
                    <Magnify />
                </div>
            </div>
        </div>
        <ul class="navigationBx flex gap-6">
            <li class="list active">
                <a href="#" class="link">
                    <span class="icon">
                        <Home />
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#" class="link">
                    <span class="icon">
                        <AccountGroup />
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#" class="link">
                    <span class="icon">
                        <TelevisionPlay />
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#" class="link">
                    <span class="icon">
                        <StoreFrontOutline />
                    </span>
                </a>
            </li>
        </ul>
        <div class="profileBx">
            <div class="profile-photo">
                <img src="/public/assets/img/photo.jpg" class="photo" />
            </div>
        </div>
    </header>
</template>
