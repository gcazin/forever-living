<template>
    <div :class='"alert alert-" + type'>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        template: 'v-alert',
        props: [
            'type',
            'content',
        ],
    }
</script>
<style>
</style>
