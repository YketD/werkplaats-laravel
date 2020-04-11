<template>
    <div id="card" class="card" >
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
                     @click="function() {twoHourActive = true; fourHourActive = false; sixHourActive = false; eightHourActive = false;}">2
                                                                                                                  uur
                </div>
                <div class="price__toggle" :class="{active: !!fourHourActive}"
                     @click="function(){twoHourActive = false; fourHourActive = true;sixHourActive = false; eightHourActive = false;}">4
                                                                                                                 uur
                </div>
                <div class="price__toggle" :class="{active: !!sixHourActive}"
                     @click="function(){twoHourActive = false; fourHourActive = false; sixHourActive = true; eightHourActive = false;}">6
                                                                                                                 uur
                </div>
                <div class="price__toggle" :class="{active: !!eightHourActive}"
                     @click="function() {twoHourActive = false; fourHourActive = false; sixHourActive = false; eightHourActive = true;}">8
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
                <div v-else-if="!!sixHourActive">
                    <p class="price"><span class="price__symbol">€</span>{{priceSixHour}},-</p>
                    <p class="price__tag"><span>(excl. BTW)</span></p>
                </div>
                <div v-else-if="!!eightHourActive">
                    <p class="price"><span class="price__symbol">€</span>{{priceEightHour}},-</p>
                    <p class="price__tag"><span>(excl. BTW)</span></p>
                </div>
            </div>
        </div>
        <transition name="fade-in-out" mode="out-in">
            <div class="container"  v-if="! displayForm" key="info">
                <ol class="card__list">
                    <li class="card__list__item" v-html="proOne" />
                    <li class="card__list__item" v-html="proTwo" />
                    <li v-if="proThree" class="card__list__item" v-html="proThree" />
                </ol>
                <button class="button card__button"
                        type="button"
                        @click="displayForm = true">Kies
                </button>
            </div>
            <div class="container" key="order" v-else>
                <span class="sub-text">Vul hier uw persoonlijke gegevens in:</span>
                <form class="form">
                    <label for="email">Email: </label>
                    <input type="text" id="email"  v-model="email"/>
                    <label for="tel">Telefoon nummer: </label>
                    <input type="text" id="tel"  v-model="phone"/>
                    <label for="name">volledige naam: </label>
                    <input type="text" id="name" v-model="fullName"/>
                </form>
                <button @click="sendOrder"
                        class="button card__button send__button"
                        type="button">
                    <div class="lds-dual-ring" v-if="loading"></div>Verstuur
                </button>
                <span class="go-back" @click="displayForm = false">< Terug</span>
            </div>
        </transition>
    </div>
</template>

<script>
    import axios from 'axios';
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
            'priceSixHour',
            'priceEightHour',
            'title',
        ],
        data() {
            return {
                twelveMonthActive: true,
                twoHourActive: true,
                fourHourActive: false,
                sixHourActive: false,
                displayForm: false,
                loading: false,
                email: "",
                phone: "",
                fullName: ""
            }
        },
        computed: {
            timeToString() {
                let time = "";
                if (!this.months) {
                    if (!this.twoHourActive) {
                        time = this.fourHourActive ? " 4 uur" : "8 uur";
                    } else {
                        time = "2 uur"
                    }
                } else {
                    time = this.twelveMonthActive ? "12 maanden" : "6 maanden";
                }
                return time;
            }
        },
        methods: {
            sendOrder() {
                this.loading =true;

                let data = {
                    'email': this.email,
                    'phone': this.phone,
                    'fullName': this.fullName,
                    'plan': this.title,
                    'time': this.timeToString,
                }
                let accepted = true;
                if(!this.email){
                    this.$notify({group: 'reservations', title: 'Mislukt !', text: 'email niet ingevuld'});
                    console.log('false');
                    accepted = false;
                    this.loading = false;
                }if(!this.phone){
                    this.$notify({group: 'reservations', title: 'Mislukt !', text: 'Telefoonnummer niet ingevuld'});
                    console.log('false');
                    accepted = false;
                    this.loading = false;
                }if(!this.fullName){
                    this.$notify({group: 'reservations', title: 'Mislukt !', text: 'Naam niet ingevuld'});
                    console.log('false');
                    accepted = false;
                    this.loading = false;
                }

                if (accepted)
                axios.post('/api/send-hire-request', data).then(response => {
                    this.$notify({
                        group: 'reservations',
                        title: 'Aanvraag succesvol! ',
                        text: 'Bekijk je mailbox voor meer informatie',
                    });
                    this.loading = false;
                    this.displayForm = false;
                }).catch(error => {
                    this.loading = false;
                    this.displayForm = false;
                })
            },
            getMailText() {
                let time = "";
                if (!this.months) {
                    if (!this.twoHourActive) {
                        time = this.fourHourActive ? " 4 uur" : "8 uur";
                    } else {
                        time = "2 uur"
                    }
                    return "Keuze reservering: %0A %0A" +
                        "" + this.title + "%0A" + time + " %0A %0A" +
                        "Hartelijk dank voor het reserveren van een vergaderruimte bij Werkplaats75C. %0A" +
                        "Wat is de gewenste datum en tijd? %0A %0A" +
                        "Datum: %0A" +
                        "Tijdstip: %0A %0A" +
                        "Verstuur deze mail en wij controleren of de door jouw aangevraagde ruimte ook daadwerkelijk beschikbaar is.%0A" +
                        "Hierna sturen we jou een bevestiging van de reservering. %0A %0A" +
                        "Hartelijke groeten, %0A" +
                        "Karin en Renate %0A" +
                        "Werkplaats 75C %0A";
                } else {

                    time = this.twelveMonthActive ? "12 maanden" : "6 maanden";
                    return "Keuze abonnement: %0A %0A" +
                        "" + this.title + " voor " + time + " %0A %0A" +
                        "Hartelijk dank voor jouw interesse in een werkplek bij Werkplaats 75C %0A %0A" +
                        "Verstuur deze mail en wij nemen contact met jou op om verdere afspraken te maken %0A %0A" +
                        "Hartelijke groeten, %0A" +
                        "Karin en Renate %0A" +
                        "Werkplaats 75C %0A";
                }
            }
        }
    }
</script>
<style>

    i {
        font-style: italic;
        font-weight: 400;
    }

    .lds-dual-ring {
        display: inline-block;
        width: 20px;
        height: 20px;     margin-right:10px;
    }
    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 16px;
        height: 16px;
        margin: 2px;

        border-radius: 50%;
        border: 3px solid #fff;
        border-color: #fff transparent #fff transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }
    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    i {
        font-style: italic;
        font-weight: 400;
    }
</style>
<style lang="scss" scoped>

    .go-back {
        position   : absolute;
        bottom     : 0;
        font-size  : 13px;
        width      : 100%;
        text-align : center;
    }

    .sub-text {
        font-size : 12px;
    }

    .container {
        text-align : left;
        height     : 310px;
        width      : 100%;
        left       : 0;
        right      : 0;
        display    : inline-block;
    }

    .form {
        width : 100%;

        label {
            display     : block;
            text-align  : left;
            font-size   : 14px;
            line-height : 16px;
            margin-top  : 8px;
        }

        input {
            width        : calc(100% - 8px);

            border       : none;
            height       : 32px;
            padding-left : 8px;
            background   : #eee;
        }
    }

    .button {
        position : absolute;
        width    : 80%;
        left     : 10%;
        bottom   : 40px;
    }

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
        margin                     : 42px 16px;

        width                      : 280px;
        height                     : 520px;
        box-shadow                 : 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        transition-property        : box-shadow, transform;
        transition-duration        : .3s;
        transition-timing-function : cubic-bezier(1.5, 2, 0.175, 1);


        &:hover {
            transform : scale(1.01);
        }
    }

    .cardsmall {
        height : 420px;
    }

    .card__title {
        font-size      : 0.875rem;
        text-transform : uppercase;
        letter-spacing : 4px;
        padding-bottom : 8px;
        height: 50px;
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

    .containerSmall {
        height: 232px;
    }
    .fade-in-out-enter-active, .fade-in-out-leave-active {
        transition : opacity .5s;
    }

    .fade-in-out-enter, .fade-in-out-leave-to /* .fade-leave-active below version 2.1.8 */
    {
        opacity : 0;
    }


</style>
