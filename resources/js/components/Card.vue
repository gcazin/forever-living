<template>
    <transition name="fade">
        <div class="flex mb-24 p-5 overflow-hidden" :class="background" id="card">
            <img class="w-1/2 rounded-full" style="height: 200px;width: 200px;" src="https://via.placeholder.com/180x120" alt="Sunset in the mountains">
            <div class="w-11/12 flex items-center flex-col justify-center">
                <div class="font-bold text-2xl mb-2 text-center block">{{ title }}</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="flex items-center text-center">
                <a class="btn btn-blue" href="#">{{ button }}</a>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        props: [
            'background',
            'title',
            'button',
        ],
    }
</script>
<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>
