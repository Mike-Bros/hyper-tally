<template>
    <div class="my-4 lg:mx-60 md:mx-40 sm:mx-auto grid grid-rows-10 grid-cols-7  justify-content-center text-center">

        <!--  Row  -->
        <!--        <div class="col-span-7 bg-green-600 dark:text-white">-->
        <!--            <h1 class="font-medium leading-tight text-4xl mt-0 mb-2 text-white">7 Wonders Duel Score Sheet</h1>-->
        <!--        </div>-->

        <!--  Row  -->
        <div class="col-span-1 bg-gray-300"></div>
        <div class="col-span-3 bg-gray-300" contenteditable><h1 class="font-medium leading-tight text-2xl mt-0 mb-2">
            {{ player1 }}</h1></div>
        <div class="col-span-3 bg-gray-300" contenteditable><h1 class="font-medium leading-tight text-2xl mt-0 mb-2">
            {{ player2 }}</h1></div>

        <!--  Blue Card Row  -->
        <div class="col-span-1 bg-sky-300"><img class="mx-auto" src="/img/sevenwondersduel/blue-card.svg"
                                                height="55" width="55"/></div>
        <div class="col-span-3 bg-sky-300"><input type="number" min="0" class="bg-sky-300 text-center" @input="onUpdate"
                                                  v-model="blueCard1" placeholder=""></div>
        <div class="col-span-3 bg-sky-300"><input type="number" min="0" class="bg-sky-300 text-center" @input="onUpdate"
                                                  v-model="blueCard2" placeholder=""></div>

        <!--  Green Card Row  -->
        <div class="col-span-1 bg-emerald-300"><img class="mx-auto" src="/img/sevenwondersduel/green-card.svg"
                                                    height="55" width="55"/></div>
        <div class="col-span-3 bg-emerald-300"><input type="number" min="0" class="bg-emerald-300 text-center"
                                                      @input="onUpdate" v-model="greenCard1" placeholder=""></div>
        <div class="col-span-3 bg-emerald-300"><input type="number" min="0" class="bg-emerald-300 text-center"
                                                      @input="onUpdate" v-model="greenCard2" placeholder=""></div>

        <!--  Yellow Card Row  -->
        <div class="col-span-1 bg-amber-200"><img class="mx-auto" src="/img/sevenwondersduel/yellow-card.svg"
                                                  height="55" width="55"/></div>
        <div class="col-span-3 bg-amber-200"><input type="number" min="0" class="bg-amber-200 text-center"
                                                    @input="onUpdate" v-model="yellowCard1" placeholder=""></div>
        <div class="col-span-3 bg-amber-200"><input type="number" min="0" class="bg-amber-200 text-center"
                                                    @input="onUpdate" v-model="yellowCard2" placeholder=""></div>

        <!--  Purple Row  -->
        <div class="col-span-1 bg-purple-400"><img class="mx-auto" src="/img/sevenwondersduel/purple-card.svg"
                                                   height="55" width="55"/></div>
        <div class="col-span-3 bg-purple-400"><input type="number" min="0" class="bg-purple-400 text-center"
                                                     @input="onUpdate" v-model="purpleCard1" placeholder=""></div>
        <div class="col-span-3 bg-purple-400"><input type="number" min="0" class="bg-purple-400 text-center"
                                                     @input="onUpdate" v-model="purpleCard2" placeholder=""></div>

        <!--  Wonders Row  -->
        <div class="col-span-1 bg-sky-200"><img class="mx-auto" src="/img/sevenwondersduel/monument.svg"
                                                height="55" width="55"/></div>
        <div class="col-span-3 bg-sky-200"><input type="number" min="0" class="bg-sky-200 text-center" @input="onUpdate"
                                                  v-model="wonders1" placeholder=""></div>
        <div class="col-span-3 bg-sky-200"><input type="number" min="0" class="bg-sky-200 text-center" @input="onUpdate"
                                                  v-model="wonders2" placeholder=""></div>

        <!--  Science Row  -->
        <div class="col-span-1 bg-emerald-300"><img class="mx-auto" src="/img/sevenwondersduel/science.svg"
                                                    height="55" width="55"/></div>
        <div class="col-span-3 bg-emerald-300"><input type="number" min="0" class="bg-emerald-300 text-center"
                                                      @input="onUpdate" v-model="science1" placeholder=""></div>
        <div class="col-span-3 bg-emerald-300"><input type="number" min="0" class="bg-emerald-300 text-center"
                                                      @input="onUpdate" v-model="science2" placeholder=""></div>

        <!--  Gold Row  -->
        <div class="col-span-1 bg-amber-300"><img class="mx-auto" src="/img/sevenwondersduel/gold.svg"
                                                  height="55" width="55"/></div>
        <div class="col-span-3 bg-amber-300"><input type="number" min="0" class="bg-amber-300 text-center"
                                                    @input="onUpdate" v-model="gold1" placeholder=""></div>
        <div class="col-span-3 bg-amber-300"><input type="number" min="0" class="bg-amber-300 text-center"
                                                    @input="onUpdate" v-model="gold2" placeholder=""></div>

        <!--  Military Row  -->
        <div class="col-span-1 bg-red-300"><img class="mx-auto" src="/img/sevenwondersduel/military.svg"
                                                height="55" width="55"/></div>
        <div class="col-span-3 bg-red-300"><input type="number" min="0" class="bg-red-300 text-center" @input="onUpdate"
                                                  v-model="military1" placeholder=""></div>
        <div class="col-span-3 bg-red-300"><input type="number" min="0" class="bg-red-300 text-center" @input="onUpdate"
                                                  v-model="military2" placeholder=""></div>

        <!--  Military Victory Row  -->
        <div class="col-span-1 bg-red-400"><img class="mx-auto" src="/img/sevenwondersduel/victory.svg"
                                                height="55" width="55"/></div>
        <div class="col-span-3 bg-red-400"><input type="checkbox"></div>
        <div class="col-span-3 bg-red-400"><input type="checkbox"></div>

        <!--  Science Victory Row  -->
        <div class="col-span-1 bg-green-600"><img class="mx-auto" src="/img/sevenwondersduel/victory.svg"
                                                  height="55" width="55"/></div>
        <div class="col-span-3 bg-green-600"><input type="checkbox"></div>
        <div class="col-span-3 bg-green-600"><input type="checkbox"></div>

        <!--  Sum Row  -->
        <div class="col-span-1 bg-gray-800"><img class="mx-auto" src="/img/sevenwondersduel/summation.svg"
                                                 height="55" width="55"/></div>
        <div class="col-span-3 bg-gray-800 text-white" v-bind="playerSum1">{{ playerSum1 }}</div>
        <div class="col-span-3 bg-gray-800 text-white">{{ playerSum2 }}</div>

    </div>
</template>

<script>
export default {
    name: "SevenWondersDuel",

    data() {
        return {
            player1: "Mike",
            player2: "Morgan",
            blueCard1: 0,
            blueCard2: 0,
            greenCard1: 0,
            greenCard2: 0,
            yellowCard1: 0,
            yellowCard2: 0,
            purpleCard1: 0,
            purpleCard2: 0,
            wonders1: 0,
            wonders2: 0,
            science1: 0,
            science2: 0,
            gold1: 0,
            gold2: 0,
            military1: 0,
            military2: 0,
            playerSum1: 0,
            playerSum2: 0,
        }
    },

    methods: {
        onUpdate(e) {
            this.playerSum1 = Number(this.blueCard1) + Number(this.greenCard1) + Number(this.yellowCard1)
                + Number(this.purpleCard1) + Number(this.wonders1) + Number(this.science1) + (Math.floor(Number(this.gold1) / 3)) + Number(this.military1)
            this.playerSum2 = Number(this.blueCard2) + Number(this.greenCard2) + Number(this.yellowCard2)
                + Number(this.purpleCard2) + Number(this.wonders2) + Number(this.science2) + (Math.floor(Number(this.gold2) / 3)) + Number(this.military2)
        },
    },

}
</script>
