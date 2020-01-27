<template>
    <div class="green-content-box">
        <div class="green-content">
            <div class="left">
                Werkplaats 75C is de plek voor ondernemers die op zoek zijn naar een werkplek.<br />
                Je werkt samen met andere professionals in een inspirerende en prettige werkomgeving,
                waar je ook kunt sparren met elkaar<br> en kunt genieten van een kop koffie.
            </div>
            <div class="center">
                Wij geloven dat je meer<br v-if="width < 500" /> uit jezelf kunt halen<br />
                door samen te werken<br v-if="width < 500" /> met anderen!<br />
            </div>
            <div class="left">
                <span class="normal">Ben je ondernemer bij WP75C? </span> <br />
                Dan kun je ook gebruik maken van onze workshop-/ vergaderruimten <br />
                <span class="normal">Ben je geen ondernemer bij WP75C? </span> <br />
                Kijk dan bij ‘Ruimte reserveren’ voor het organiseren van workshops, vergaderingen of overige
                bijeenkomsten.
                <br />
                <span class="normal">Heb jij een leuk idee voor een bijeenkomst? </span> <br />Laat het ons weten. Wij
                denken graag mee over de mogelijkheden.
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "WerkplaatsInformatie",
        data() {
            return {
                width:window.innerWidth
            }
        }
    }
</script>

<style lang="scss" scoped>
    .normal {
        font-weight : 400;
        font-style  : italic;
    }

    .green-content-box {
        font-size   : 1.5vw;
        line-height : 2.5vw;
        max-height  : 10vw;

        @media ('max-width : 500px') {
            font-size : 14px;
        }
    }

    /*#text {*/
    /*    font-size        : 24px;*/
    /*    background-color : rgb(32, 64, 37);*/
    /*    color            : white;*/
    /*    margin-top       : 112px;*/
    /*    margin-bottom    : 222px;*/
    /*    margin-right     : 142px;*/
    /*    padding          : 12px;*/
    /*    line-height      : 42px;*/
    /*}*/

    .center {
        background : rgba(0, 0, 0, 0.2);
        padding    : 10px;
        margin     : 26px;
        display    : inline-block;
    }

</style>
