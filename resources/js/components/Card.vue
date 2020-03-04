<template>
    <transition name="fade">
        <div class="slideUp card relative w-full lg:w-1/3 rounded-lg shadow-2xl" id="card">
            <div class="h-full flex flex-col items-center justify-center">
                <div style="z-index: 999" class="flex-1 w-full flex items-center justify-center text-center">
                    <span class="text-2xl mx-5 h-20 text-gray-700">{{ title }}</span>
                </div>
                <div style="z-index: 999" class="flex-1 w-full flex items-center justify-end text-center">
                    <a class="btn" :href="`${link}`">{{ button }}</a>
                </div>
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
            'link'
        ],
    }
</script>
<style>
    .card {
        --first: #0A8ACCA6;
        --first-hover: #0A8ACC;
        --second: #FF5F26A6;
        --second-hover: #FF5F26;
        --third: #209E5EA6;
        --third-hover: #209E5E;
        height: 300px;
        background: white;
        border-bottom-style: solid;
        border-bottom-width: 3px;
        margin-top: 70px;
        position: relative;
        overflow: hidden;
        -webkit-transition: .5s ease-out;
        transition: .5s ease-out;
    }
    .card span {
        transition: color .3s ease-in;
    }
    .card:first-child {
        border-bottom-color: var(--first);
    }
    .card:nth-child(2) {
        margin-left: 50px;
        margin-right: 50px;
        border-bottom-color:var(--second);
    }
    .card:last-child {
        border-bottom-color: var(--third);
    }

    .slideUp:first-child::before {
        background: var(--first-hover);
    }
    .slideUp:nth-child(2)::before {
        background: var(--second-hover);
    }
    .slideUp:last-child::before {
        background: var(--third-hover);
    }

    .slideUp {
        color: #5878F3;
        cursor: pointer;
        position: relative;
        transition: 0.5s ease-out;
        overflow: hidden;
    }
    .slideUp::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: translateY(100%);
        background-color: #5878F3;
        transition: transform 0.3s ease-out;
        z-index: 0;
    }
    .slideUp:hover::before {
        transform: translateY(0);
        transition: transform 0.3s ease-in;
    }

    .card a {
        font-size: 15px;
        color: white;
        margin-right: 45px;
    }
    .card:hover a {
        background: white !important;
    }
    .card:nth-child(2) a {
        background: var(--second);
    }
    .card:last-child a {
        background: var(--third);
    }
    .card:first-child:hover a {
        color: var(--first-hover);
    }
    .card:nth-child(2):hover a {
        color: var(--second-hover);
    }
    .card:last-child:hover a {
        color: var(--third-hover);
    }
    .card:hover span {
        color: white;
    }

    /* Icons */
    .card::after {
        content: '';
        height: 40%;
        background-repeat: no-repeat;
        background-size: 100px;
        transform: rotate(-12deg);
        position: absolute;
        top: 124px;
        opacity: 0.6;
        left: 26px;
        right: 0;
        bottom: 0;
        width: 50%;
        transition: .2s ease-in;
    }
    .card:hover::after {
        opacity: 1;
    }
    .card:first-child::after {
        background: url(https://image.flaticon.com/icons/svg/189/189090.svg) no-repeat;
    }
    .card:nth-child(2)::after {
        background: url(https://image.flaticon.com/icons/svg/189/189093.svg) no-repeat;
    }
    .card:last-child::after {
        background: url(https://image.flaticon.com/icons/svg/189/189100.svg) no-repeat;
        transform: rotate(0deg);
        top: 139px;
        left: 47px;
    }
    .card:hover::after {
        transform: rotate(0);
    }



    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>
