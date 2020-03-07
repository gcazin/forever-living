<template>

    <div class="px-3 md:mb-0 flex-1">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :for="`${name}`">
            {{ label }}
        </label>
        <input
            :name="`${name}`"
            class="form-control"
            :id="`${name}`"
            required="required"
            :v-model="`${name}`"
            :type="[ type ? type : 'text']"
            :placeholder="`${placeholder}`">
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        template: 'v-card',
        props: [
            'type',
            'label',
            'name',
            'placeholder',
        ],
    }
</script>
<style>
    .card {
        --first: #0A8ACCA6;
        --second: #FF5F26A6;
        --third: #209E5EA6;
        height: 300px;
        background: white;
        border-bottom-style: solid;
        border-bottom-width: 3px;
        margin-top: 70px;
    }
    .card a {
        font-size: 15px;
        color: white;
    }
    .card:first-child a {
        background: var(--first);
    }
    .card:nth-child(2) a {
        background: var(--second);
    }
    .card:last-child a {
        background: var(--third);
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
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>
