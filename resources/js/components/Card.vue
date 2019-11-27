<template>
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://via.placeholder.com/380x250" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-2xl mb-2 text-center">{{ title }}</div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
        <div class="px-6 py-4 text-center">
            <a class="btn btn-blue" href="#">{{ button }}</a>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'title',
            'button'
        ],
    }
</script>
