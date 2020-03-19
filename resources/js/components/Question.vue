
<template>
    <div class="container-full text-center">
        <form action="https://postman-echo.com/post" method="post">

            <div v-show="step === 1">

                <h1 class="text-2xl">Etes-vous entièrement satisfait de votre situation professionnelle et/ou financière actuelle ?</h1>

                <div class="mt-5">
                    <button class="btn btn-light"><a href="/merci">Oui</a></button>
                    <button class="btn btn-blue" @click.prevent="next()">Non</button>
                </div>

            </div>

            <div v-show="step === 2">
                <h1 class="text-2xl">Si aujourd'hui, sans changer ce que vous faites, une solution business se présentait à vous, auriez-vous tendance à avoir l'esprit ouvert pour l'étudier ?</h1>

                <div class="mt-5">
                    <button class="btn btn-blue">
                        <a href="/contact">Oui</a>
                    </button>
                    <button class="btn btn-light"><a href="/merci">Non</a></button>
                </div>

            </div>

        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                step:1,
                registration:{
                    name:null,
                    email:null,
                    street:null,
                    city:null,
                    state:null,
                    numtickets:0,
                    shirtsize:'XL'
                }
            }
        },
        methods:{
            prev() {
                this.step--;
            },
            next() {
                this.step++;
            }
        }
    }
</script>
