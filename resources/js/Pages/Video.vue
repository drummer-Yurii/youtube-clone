<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue';
import ThumbUpOutline from 'vue-material-design-icons/ThumbUpOutline.vue';
import ThumbDownOutline from 'vue-material-design-icons/ThumbDownOutline.vue';

// defineProps({
//     canLogin: Boolean,
// });
</script>

<template>
    <Head title="Youtube" />

    <NavLayout>
        <div class="xl:flex">
            <div class="p-3">
                <video src="/videos/Seoul.mp4" controls autoplay />
                <div class="text-white text-2xl font-extrabold mt-4">A cool video</div>
                <div class="flex items-center mb-4">
                    <img
                        class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
                        :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` || ''"
                    />
                    <div class="pl-2 mt-1">
                        <div class="text-white text-lg font-extrabold flex items-center">
                            Urii Rybachok Dev <CheckCircle fillColor="#888888" :size="17" />
                        </div>
                        <div class="text-sm text-gray-400 font-extrabold">1k views - 3 day ago</div>
                    </div>
                </div>

                <div class="bg-[#3F3F3F] rounded-lg w-full p-3 text-white">
                    <div class="text-white text-lg font-extrabold">1k views - 3 day ago</div>
                    <div class="text-sm font-extrabold mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="text-sm font-extrabold">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam inventore natus repellat quas cumque odio veniam, nam reiciendis quibusdam atque quaerat repellendus sunt illum ipsam ab veritatis accusantium voluptatem. Omnis.
                    </div>
                </div>

                <div class="mt-6">
                    <div class="text-white text-lg font-extrabold">12 Comments</div>
                    <div class="flex items-flex mb-4 mt-2">
                        <img
                            class="rounded-full mt-2 w-12 h-12"
                            :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` || ''"
                        />
                        <div class="pl-6 mt-1">
                            <div class="text-white font-extrabold flex items-baseline">
                                <div>Alex Smith</div>
                                <div class="text-gray-400 pl-3">
                                    6 days ago
                                </div>
                            </div>
                            <div class="text-gray-200 text-sm font-semibold">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, vero aliquid voluptatem nam facere fugiat excepturi expedita iusto illum non ratione maxime, quod deleniti repellendus.
                            </div>
                            <div class="mt-4 flex items-center">
                                <ThumbUpOutline fillColor="#FFFFFF" :size="20" class="pr-2" />
                                <div class="text-gray-400 text-sm font-extrabold pr-10">
                                    {{ (Math.random() * 100).toFixed(0) }}
                                </div>
                                <ThumbDownOutline fillColor="#FFFFFF" :size="20" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </NavLayout>
</template>

