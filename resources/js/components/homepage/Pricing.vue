<template>
    <div id="card" class="card">
        <h1 class="card__title">{{title}}</h1>
        <div class="card__body">
            <div v-if="!!priceTwelveMonth" class="price__toggle__container">
                <div class="price__toggle" :class="{active: !!twelveMonthActive}" @click="twelveMonthActive = true">12
                                                                                                                    maand
                </div>
                <div class="price__toggle" :class="{active: !twelveMonthActive}" @click="twelveMonthActive = false">6
                                                                                                                    maand
                </div>
            </div>
            <div v-else class="price__toggle__container">
                <div class="price__toggle" :class="{active: !!twoHourActive}"
                     @click="function() {twoHourActive = true; fourHourActive = false; eightHourActive = false;}">2
                                                                                                                  uur
                </div>
                <div class="price__toggle" :class="{active: !!fourHourActive}"
                     @click="function(){twoHourActive = false; fourHourActive = true; eightHourActive = false;}">4
                                                                                                                 uur
                </div>
                <div class="price__toggle" :class="{active: !!eightHourActive}"
                     @click="function() {twoHourActive = false; fourHourActive = false; eightHourActive = true;}">8
                                                                                                                  uur
                </div>
            </div>
            <div v-if="months">
                <div v-if="twelveMonthActive">
                    <p class="price"><span class="price__symbol">€</span>{{priceTwelveMonth}},-</p>
                    <p class="price__tag">Per maand <span>(excl. BTW)</span></p>
                </div>
                <div v-else>
                    <p class="price"><span class="price__symbol">€</span>{{priceSixMonth}},-</p>
                    <p class="price__tag">Per maand <span>(excl. BTW)</span></p>
                </div>
            </div>
            <div v-else>
                <div v-if="!!twoHourActive">
                    <p class="price"><span class="price__symbol">€</span>{{priceTwoHour}},-</p>
                    <p class="price__tag"><span>(excl. BTW)</span></p>
                </div>
                <div v-else-if="!!fourHourActive">
                    <p class="price"><span class="price__symbol">€</span>{{priceFourHour}},-</p>
                    <p class="price__tag"><span>(excl. BTW)</span></p>
                </div>
                <div v-else-if="!!eightHourActive">
                    <p class="price"><span class="price__symbol">€</span>{{priceEightHour}},-</p>
                    <p class="price__tag"><span>(excl. BTW)</span></p>
                </div>
            </div>
        </div>
        <ol class="card__list">
            <li class="card__list__item">{{proOne}}</li>
            <li class="card__list__item">{{proTwo}}</li>
            <li class="card__list__item">{{proThree}}</li>
        </ol>
        <a href="mailto:yketd@hotmail.com?body=Ik%20heb%20interresse%20in%20Werkplaats%2075C">
            <button class="card__button"
                    type="button"
                    @click="location.href('')">Kies
            </button>
        </a>
    </div>
</template>

<script>
    export default {
        name: "Pricing",
        props: [
            'proOne',
            'proTwo',
            'proThree',
            'months',
            'priceTwelveMonth',
            'priceSixMonth',
            'priceTwoHour',
            'priceFourHour',
            'priceEightHour',
            'title',
        ],
        data() {
            return {
                months: true,
                twelveMonthActive: true,
                twoHourActive: true,
                fourHourActive: false,
            }
        }
    }
</script>

<style lang="scss" scoped>
    span {
        font-size : .6rem;
    }

    * {
        z-index : 1;
    }

    html {
        font-size  : 1rem;
        color      : #777777;
        background : #d5d5d5;
        background : -webkit-gradient(linear, left top, left bottom, from(#d5d5d5), to(#ffffff));
        background : linear-gradient(#d5d5d5, #ffffff);
        height     : 100%;
    }

    body {
        display               : -webkit-box;
        display               : flex;
        -webkit-box-orient    : horizontal;
        -webkit-box-direction : normal;
        flex-direction        : row;
        -webkit-box-pack      : center;
        justify-content       : center;
    }

    .card {
        background-color           : #204025;
        color                      : #ffffff;
        padding                    : 16px 32px 32px 32px;
        margin                     : 16px;
        width                      : 280px;
        height                     : 500px;
        box-shadow                 : 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        transition-property        : box-shadow, transform;
        transition-duration        : .3s;
        transition-timing-function : cubic-bezier(1.5, 2, 0.175, 1);


        &:hover {
            transform : scale(1.01);
        }
    }

    .card__title {
        font-size      : 0.875rem;
        text-transform : uppercase;
        letter-spacing : 4px;
        padding-bottom : 8px;
    }

    .card__body {
        position       : relative;
        border-top     : 2px solid #777777;
        border-bottom  : 2px solid #777777;
        padding-bottom : 16px;
    }

    .price {
        font-size    : 4rem;
        font-weight  : bold;
        text-shadow  : 0 0 1px #000000;
        color        : white;
        padding-left : 24px;
        margin       : 32px 0;
    }

    .price__toggle__container {
        display        : flex;
        flex-direction : row;
    }

    .price__toggle {
        width     : 50%;
        padding   : 12px;
        font-size : 16px;
        cursor    : pointer;

        &.active {
            /*border-bottom: 1px solid #999999;*/
            /*border-left: 1px solid #999999 ;*/
            /*border-right: 1px solid #999999 ;*/
            background-color   : rgba(255, 255, 255, .05);

            /*-moz-box-shadow:    unset;*/
            /*-webkit-box-shadow: unset;*/
            /*box-shadow:         unset;*/

            -moz-box-shadow    : inset 0 0 2px #ffffff;
            -webkit-box-shadow : inset 0 0 2px #ffffff;
            box-shadow         : inset 0 0 2px #ffffff;

        }
    }

    .price__symbol {
        position  : absolute;
        left      : 0px;
        top       : 42px;
        font-size : 1.5rem;
    }

    .price__tag {
        text-transform : uppercase;
        margin-bottom  : 8px;
    }

    ol {
        list-style  : none;
        margin-left : -40px;
    }

    li {
        padding   : 6px 0;
        font-size : 1rem;
    }

    li:before {
        content      : "-";
        margin-right : 8px;
        font-size    : 0.875rem;
    }

    .card__button {
        border           : none;
        width            : 100%;
        background-color : #e88a60;
        margin-top       : 32px;
        padding          : 16px 0;
        font-size        : 1.25rem;
        font-weight      : bold;
        letter-spacing   : 2.6666666667px;
        text-transform   : uppercase;
        text-shadow      : 1px 1px #3a3a3a;
        color            : #ffffff;
        box-shadow       : 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        cursor           : pointer;
    }


</style>
