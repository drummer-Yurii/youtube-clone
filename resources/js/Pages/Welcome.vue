<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';
import VideoCard from '@/Components/VideoCard.vue';

// defineProps({
//     canLogin: Boolean,
// });
</script>

<template>
    <Head title="Youtube" />

    <NavLayout>
        <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2">
            <VideoCard
                title="Cool city view"
                user="Urii Rybachok"
                views="23k views - 3 days ago"
                image="https://picsum.photos/id/230/100"
                videoUrl="/videos/Seoul.mp4"
                thumbnail="/videos/Thumbnails/Seoul.png"
            />
        </div>
    </NavLayout>
</template>

