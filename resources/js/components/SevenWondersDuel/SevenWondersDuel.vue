<template>
    <div class="my-4 lg:mx-60 md:mx-40 sm:mx-auto grid grid-rows-10 grid-cols-7 justify-content-center text-center">

        <!--  Row  -->
        <!--        <div class="col-span-7 bg-green-600 dark:text-white">-->
        <!--            <h1 class="font-medium leading-tight text-4xl mt-0 mb-2 text-white">7 Wonders Duel Score Sheet</h1>-->
        <!--        </div>-->

        <!--  Row  -->
        <div class="col-span-1 bg-gray-300 flex">
            <button type="button" @click="clearScores()"
                    class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-full text-sm px-2 py-2 mx-auto my-1 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                Clear
            </button>
        </div>
        <div id="player1name" class="col-span-3 bg-gray-300" contenteditable><h1
            class="font-medium leading-tight text-2xl mt-0 mb-2">
            {{ player1 }}</h1></div>
        <div id="player2name" class="col-span-3 bg-gray-300" contenteditable><h1
            class="font-medium leading-tight text-2xl mt-0 mb-2">
            {{ player2 }}</h1></div>

        <!--  Blue Card Row  -->
        <div class="col-span-1 bg-sky-300"><img class="mx-auto" src="/img/sevenwondersduel/blue-card.svg"
                                                height="55" width="55"/></div>
        <div class="col-span-3 bg-sky-300">
            <button type="button" @click="buttonClick('b.1',false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-sky-300 text-center text-3xl w-1/3 spin-button-none
                                                   text-gray-800 h-full"
                   @input="onUpdate"
                   v-model="blueCard1" placeholder="">
            <button type="button" @click="buttonClick('b.1', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="col-span-3 bg-sky-300">
            <button type="button" @click="buttonClick('b.2', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-sky-300 text-center text-3xl w-1/3 spin-button-none
                                                   text-gray-800 h-full"
                   @input="onUpdate"
                   v-model="blueCard2" placeholder="">
            <button type="button" @click="buttonClick('b.2', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!--  Green Card Row  -->
        <div class="col-span-1 bg-emerald-300"><img class="mx-auto" src="/img/sevenwondersduel/green-card.svg"
                                                    height="55" width="55"/></div>
        <div class="col-span-3 bg-emerald-300">
            <button type="button" @click="buttonClick('g.1', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-emerald-300 text-center text-3xl w-1/3 spin-button-none
                                                       text-gray-800 h-full"
                   @input="onUpdate" v-model="greenCard1" placeholder="">
            <button type="button" @click="buttonClick('g.1', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="col-span-3 bg-emerald-300">
            <button type="button" @click="buttonClick('g.2', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-emerald-300 text-center text-3xl w-1/3 spin-button-none
                                                       text-gray-800 h-full"
                   @input="onUpdate" v-model="greenCard2" placeholder="">
            <button type="button" @click="buttonClick('g.2', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!--  Yellow Card Row  -->
        <div class="col-span-1 bg-amber-200"><img class="mx-auto" src="/img/sevenwondersduel/yellow-card.svg"
                                                  height="55" width="55"/></div>
        <div class="col-span-3 bg-amber-200">
            <button type="button" @click="buttonClick('y.1', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-amber-200 text-center text-3xl w-1/3 spin-button-none
                                                     text-gray-800 h-full"
                   @input="onUpdate" v-model="yellowCard1" placeholder="">
            <button type="button" @click="buttonClick('y.1', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="col-span-3 bg-amber-200">
            <button type="button" @click="buttonClick('y.2', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-amber-200 text-center text-3xl w-1/3 spin-button-none
                                                     text-gray-800 h-full"
                   @input="onUpdate" v-model="yellowCard2" placeholder="">
            <button type="button" @click="buttonClick('y.2', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!--  Purple Row  -->
        <div class="col-span-1 bg-purple-400"><img class="mx-auto" src="/img/sevenwondersduel/purple-card.svg"
                                                   height="55" width="55"/></div>
        <div class="col-span-3 bg-purple-400">
            <button type="button" @click="buttonClick('p.1', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-purple-400 text-center text-3xl w-1/3 spin-button-none
                                                      text-gray-800 h-full"
                   @input="onUpdate" v-model="purpleCard1" placeholder="">
            <button type="button" @click="buttonClick('p.1', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="col-span-3 bg-purple-400">
            <button type="button" @click="buttonClick('p.2', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-purple-400 text-center text-3xl w-1/3 spin-button-none
                                                      text-gray-800 h-full"
                   @input="onUpdate" v-model="purpleCard2" placeholder="">
            <button type="button" @click="buttonClick('p.2', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!--  Wonders Row  -->
        <div class="col-span-1 bg-sky-200"><img class="mx-auto" src="/img/sevenwondersduel/monument.svg"
                                                height="55" width="55"/></div>
        <div class="col-span-3 bg-sky-200">
            <button type="button" @click="buttonClick('w.1', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-sky-200 text-center text-3xl w-1/3 spin-button-none
                                                   text-gray-800 h-full"
                   @input="onUpdate"
                   v-model="wonders1" placeholder="">
            <button type="button" @click="buttonClick('w.1', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="col-span-3 bg-sky-200">
            <button type="button" @click="buttonClick('w.2', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-sky-200 text-center text-3xl w-1/3 spin-button-none
                                                   text-gray-800 h-full"
                   @input="onUpdate"
                   v-model="wonders2" placeholder="">
            <button type="button" @click="buttonClick('w.2', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!--  Science Row  -->
        <div class="col-span-1 bg-emerald-300"><img class="mx-auto" src="/img/sevenwondersduel/science.svg"
                                                    height="55" width="55"/></div>
        <div class="col-span-3 bg-emerald-300">
            <button type="button" @click="buttonClick('sci.1', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-emerald-300 text-center text-3xl w-1/3 spin-button-none
                                                       text-gray-800 h-full"
                   @input="onUpdate" v-model="science1" placeholder="">
            <button type="button" @click="buttonClick('sci.1', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="col-span-3 bg-emerald-300">
            <button type="button" @click="buttonClick('sci.2', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-emerald-300 text-center text-3xl w-1/3 spin-button-none
                                                       text-gray-800 h-full"
                   @input="onUpdate" v-model="science2" placeholder="">
            <button type="button" @click="buttonClick('sci.2', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!--  Gold Row  -->
        <div class="col-span-1 bg-amber-300"><img class="mx-auto" src="/img/sevenwondersduel/gold.svg"
                                                  height="55" width="55"/></div>
        <div class="col-span-3 bg-amber-300">
            <button type="button" @click="buttonClick('gol.1', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-amber-300 text-center text-3xl w-1/3 spin-button-none
                                                     text-gray-800 h-full"
                   @input="onUpdate" v-model="gold1" placeholder="">
            <button type="button" @click="buttonClick('gol.1', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="col-span-3 bg-amber-300">
            <button type="button" @click="buttonClick('gol.2', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-amber-300 text-center text-3xl w-1/3 spin-button-none
                                                     text-gray-800 h-full"
                   @input="onUpdate" v-model="gold2" placeholder="">
            <button type="button" @click="buttonClick('gol.2', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!--  Military Row  -->
        <div class="col-span-1 bg-red-300"><img class="mx-auto" src="/img/sevenwondersduel/military.svg"
                                                height="55" width="55"/></div>
        <div class="col-span-3 bg-red-300">
            <button type="button" @click="buttonClick('mil.1', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-red-300 text-center text-3xl w-1/3 spin-button-none
                                                   text-gray-800 h-full"
                   @input="onUpdate"
                   v-model="military1" placeholder="">
            <button type="button" @click="buttonClick('mil.1', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="col-span-3 bg-red-300">
            <button type="button" @click="buttonClick('mil.2', false)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M 9.707 3.293 a 1 1 90 0 0 -1.414 0 l -6 6 a 1 1 90 0 0 0 1.414 l 6 6 a 1 1 90 0 0 1.414 -1.414 L 5.414 11 H 17 a 1 1 90 1 0 0 -2 h -11.586 l 4.293 -4.293 a 1 1 90 0 0 0 -1.414 z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="number" min="0"
                   class="bg-red-300 text-center text-3xl w-1/3 spin-button-none
                                                   text-gray-800 h-full"
                   @input="onUpdate"
                   v-model="military2" placeholder="">
            <button type="button" @click="buttonClick('mil.2', true)"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

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
        <div class="col-span-3 bg-gray-800 text-white text-4xl" v-bind="playerSum1">{{ playerSum1 }}</div>
        <div class="col-span-3 bg-gray-800 text-white text-4xl"><p class="h-full">{{ playerSum2 }}</p></div>

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
        onUpdate() {
            this.playerSum1 = Number(this.blueCard1) + Number(this.greenCard1) + Number(this.yellowCard1)
                + Number(this.purpleCard1) + Number(this.wonders1) + Number(this.science1) + (Math.floor(Number(this.gold1) / 3)) + Number(this.military1)
            this.playerSum2 = Number(this.blueCard2) + Number(this.greenCard2) + Number(this.yellowCard2)
                + Number(this.purpleCard2) + Number(this.wonders2) + Number(this.science2) + (Math.floor(Number(this.gold2) / 3)) + Number(this.military2)

            // if (playerSum1 > playerSum2){
            //     document.getElementById('player1name').classList.add('')
            // }
        },
        clearScores() {
            this.blueCard1 = 0;
            this.blueCard2 = 0;
            this.greenCard1 = 0;
            this.greenCard2 = 0;
            this.yellowCard1 = 0;
            this.yellowCard2 = 0;
            this.purpleCard1 = 0;
            this.purpleCard2 = 0;
            this.wonders1 = 0;
            this.wonders2 = 0;
            this.science1 = 0;
            this.science2 = 0;
            this.gold1 = 0;
            this.gold2 = 0;
            this.military1 = 0;
            this.military2 = 0;
            this.onUpdate()
        },
        buttonClick(field_code, add) {
            field_code = field_code.split(".")
            const field = field_code[0]
            const player = Number(field_code[1])

            if (add) {
                this.add(field, player)
            } else {
                this.sub(field, player)
            }
            this.onUpdate()
        },
        add(field, player) {
            if (player === 1) {
                if (field === 'b') {
                    this.blueCard1 += 1
                } else if (field === 'g') {
                    this.greenCard1 += 1
                } else if (field === 'y') {
                    this.yellowCard1 += 1
                } else if (field === 'p') {
                    this.purpleCard1 += 1
                } else if (field === 'w') {
                    this.wonders1 += 1
                } else if (field === 'sci') {
                    this.science1 += 1
                } else if (field === 'gol') {
                    this.gold1 += 1
                } else if (field === 'mil') {
                    this.military1 += 1
                }
            } else if (player === 2) {
                if (field === 'b') {
                    this.blueCard2 += 1
                } else if (field === 'g') {
                    this.greenCard2 += 1
                } else if (field === 'y') {
                    this.yellowCard2 += 1
                } else if (field === 'p') {
                    this.purpleCard2 += 1
                } else if (field === 'w') {
                    this.wonders2 += 1
                } else if (field === 'sci') {
                    this.science2 += 1
                } else if (field === 'gol') {
                    this.gold2 += 1
                } else if (field === 'mil') {
                    this.military2 += 1
                }
            }
        },
        sub(field, player) {
            if (player === 1) {
                if (field === 'b') {
                    if (this.blueCard1 > 0) {
                        this.blueCard1 -= 1
                    }
                } else if (field === 'g') {
                    if (this.greenCard1 > 0) {
                        this.greenCard1 -= 1
                    }
                } else if (field === 'y') {
                    if (this.yellowCard1 > 0) {
                        this.yellowCard1 -= 1
                    }
                } else if (field === 'p') {
                    if (this.purpleCard1 > 0) {
                        this.purpleCard1 -= 1
                    }
                } else if (field === 'w') {
                    if (this.wonders1 > 0) {
                        this.wonders1 -= 1
                    }
                } else if (field === 'sci') {
                    if (this.science1 > 0) {
                        this.science1 -= 1
                    }
                } else if (field === 'gol') {
                    if (this.gold1 > 0) {
                        this.gold1 -= 1
                    }
                } else if (field === 'mil') {
                    if (this.military1 > 0) {
                        this.military1 -= 1
                    }
                }
            } else if (player === 2) {
                if (field === 'b') {
                    if (this.blueCard2 > 0) {
                        this.blueCard2 -= 1
                    }
                } else if (field === 'g') {
                    if (this.greenCard2 > 0) {
                        this.greenCard2 -= 1
                    }
                } else if (field === 'y') {
                    if (this.yellowCard2 > 0) {
                        this.yellowCard2 -= 1
                    }
                } else if (field === 'p') {
                    if (this.purpleCard2 > 0) {
                        this.purpleCard2 -= 1
                    }
                } else if (field === 'w') {
                    if (this.wonders2 > 0) {
                        this.wonders2 -= 1
                    }
                } else if (field === 'sci') {
                    if (this.science2 > 0) {
                        this.science2 -= 1
                    }
                } else if (field === 'gol') {
                    if (this.gold2 > 0) {
                        this.gold2 -= 1
                    }
                } else if (field === 'mil') {
                    if (this.military2 > 0) {
                        this.military2 -= 1
                    }
                }
            }
        }
    },

}
</script>
