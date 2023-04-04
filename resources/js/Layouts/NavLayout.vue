<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div class="relative">
        <div id="TopNav" class="w-[100%] h-[60px] fixed bg-black z-20 flex items-center justify-between">

        </div>
        <div id="SideNav">

        </div>
        <div id="SideNavOverlay">

        </div>

        <slot />
    </div>
</template>
