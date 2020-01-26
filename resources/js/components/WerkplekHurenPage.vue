<template>
    <div class="page-container">
        <div class="contact-info-container">
            <h1 class="big-title">
                WERKRUIMTEN
            </h1>
            <div class="info-container">
                <div class="info">
                    Ben jij benieuwd of WP75C voor jou de ideale werkplek is?
                    Je hebt de keuze uit verschillende abonnementen en mogelijkheden.
                    Wil je graag een eigen vaste werkplek?
                    Wij kijken samen met jou naar de mogelijkheden.
                </div>
            </div>
            <div class="opaque"></div>
        </div>
        <div>

        </div>
        <div class="content">
            <div v-if="false" id="bubbles">
                <div class="bubble bubble-1">
                    <div class="bubble-content">Vrije
                                                toegang tot wifi
                    </div>
                </div>
                <div class="bubble bubble-2">
                    <div class="bubble-content">In de
                                                workshop- /vergaderruimte
                                                is een beamer
                                                aanwezig.
                    </div>
                </div>
                <div class="bubble bubble-3">
                    <div class="bubble-content">Bij het
                                                gebruik van
                                                de ruimten is koffie & thee
                                                inbegrepen.
                    </div>
                </div>
            </div>
            <div v-if="false" class="green-content-box">
                <div class="green-content">
                    <div class="grid-3">
                        <div class="grid-column bold">Verhuur van de vergaderruimten</div>
                        <div class="grid-column bold">Per 2 u / 4 u / 8 u</div>
                        <div class="grid-column bold">Aantal personen</div>


                        <div class="grid-column bold">Workshop-/ vergaderruimten</div>
                        <div class="grid-column">€ 30,00/ € 60,00/ € 90,00</div>
                        <div class="grid-column">20 á 25 personen</div>


                        <div class="grid-column bold">Spreekkamer</div>
                        <div class="grid-column">€ 20,00/ € 40,00/ € 70,00</div>
                        <div class="grid-column">6 á 8 personen</div>
                    </div>
                </div>
            </div>
<!--            <div v-if="true" class="price-cards">-->
<!--                <pricing-card-->
<!--                        :price-two-hour="30"-->
<!--                        :price-four-hour="60"-->
<!--                        :price-eight-hour="90"-->
<!--                        :months="false"-->
<!--                        :title="'Onbeperkt'"-->
<!--                        :pro-one="'20 á 25 personen'"-->
<!--                        :pro-two="'Beschikking over workshop / vergaderruimte'"-->
<!--                        :pro-three="'Wifi / koffie / thee'"-->
<!--                />-->
<!--                <pricing-card-->
<!--                        :price-two-hour="20"-->
<!--                        :price-four-hour="40"-->
<!--                        :price-eight-hour="70"-->
<!--                        :months="false"-->
<!--                        :title="'Onbeperkt + Vaste plek'"-->
<!--                        :pro-one="'6 á 8 personen'"-->
<!--                        :pro-two="'Beschikking over spreekkamer'"-->
<!--                        :pro-three="'Wifi / Koffie / Thee'"-->
<!--                />-->
<!--            </div>-->
            <div v-if="true" class="price-cards">
                <pricing-card
                        :price-twelve-month="175"
                        :price-six-month="185"
                        :title="'Onbeperkt'"
                        :months="true"
                        :pro-one="'Maak onbeperkt gebruik van werkplaats 75C.'"
                        :pro-two="'12 uur workshop / vergaderruimte'"
                        :pro-three="'Wifi / Koffie / Thee'" />
                <pricing-card
                        :price-twelve-month="220"
                        :price-six-month="235"
                        :title="'Onbeperkt + Vaste plek'"
                        :months="true"
                        :pro-one="'Onbeperkt gebruik met vaste plek'"
                        :pro-two="'12 uur workshop / vergaderruimte'"
                        :pro-three="'Wifi / Koffie / Thee'" />
                <pricing-card
                        :price-twelve-month="150"
                        :price-six-month="150"
                        :title="'3 Dagen'"
                        :months="true"
                        :pro-one="'3 dagen gebruik'"
                        :pro-two="'9 uur workshop/vergaderruimte (op werkdagen)'"
                        :pro-three="'Wifi / Koffie / Thee'" />
                <pricing-card
                        :price-twelve-month="125"
                        :price-six-month="125"
                        :title="'2 Dagen'"
                        :months="true"
                        :pro-one="'2 Dagen gebruik'"
                        :pro-two="'6 uur workshop/vergaderruimte (op werkdagen)'"
                        :pro-three="'Wifi / Koffie / Thee'"
                />
                <pricing-card
                        :price-twelve-month="75"
                        :price-six-month="75"
                        :title="'1 Dag'"
                        :months="true"
                        :pro-one="'1 Dag gebruik'"
                        :pro-two="'3 uur workshop/vergaderruimte (op werkdagen)'"
                        :pro-three="'Wifi / Koffie / Thee'" />
            </div>
            <div class="content-opaque">
            </div>
        </div>
    </div>
</template>

<script>
    import PricingCard from "../components/homepage/Pricing";

    export default {
        name: "ContactPage",
        components: { PricingCard }
    }
</script>

<style lang="scss" scoped>
    .content {
        display: inline-block;
        height: auto;
    }

    .price-cards {
        width           : 100%;
        display         : flex;
        justify-content : space-evenly;
        flex-wrap: wrap;
        flex-direction: revert;
    }

    h1 {
        font-size   : 42px;
        line-height : 42px;
        text-align  : left;
        color       : rgb(32, 64, 37);
    }

    .big-title {
        position : relative;
        z-index  : 1;
    }

    .mobile-menu {
        display : none;

        @media ('max-width: 500px') {
            display : block;
            width   : 100%;
        }
    }

    .info {
        width                 : 61vw;
        display               : grid;
        grid-template-columns : auto auto;
        text-align            : left;
        font-weight           : 300;
        font-size             : 24px;
        line-height           : 36px;
        z-index               : 1;
        position              : relative;

        @media ('max-width: 920px') {
            width       : 90vw;
            font-size   : 14px;
            line-height : 20px;
        }
    }

    .grid-column {
        height : 100px;

    }

    .info-container {
        position : relative;
    }

    .sub-item {
        font-weight : 200;
    }

    .bubble {
        width                      : 200px;
        height                     : 200px;
        border-radius              : 200px;
        position                   : relative;
        color                      : rgb(32, 64, 37);
        font-size                  : 32px;
        border                     : 5px solid rgb(232, 138, 96);
        background-color           : rgba(232, 138, 96, .2);

        transition-property        : box-shadow, transform;
        transition-duration        : .3s;
        transition-timing-function : cubic-bezier(1.5, 2, 0.175, 1);

        &.dark {
            background-color : rgba(232, 138, 96, .5);
            color            : #bccfbf;
        }

        &:hover {
            transform  : scale(1.1);
            box-shadow : 0 3px 6px rgba(0, 0, 0, 0.35);
        }
    }

    #bubbles {
        z-index : 1;
    }

    /*#bubbles {*/
    /*    width: 25%;*/
    /*    margin-top: 112px;*/
    /*    margin-bottom: 112px;*/
    /*    margin-left: 24px;*/
    /*    position: relative;*/

    /*    @media('max-width : 992px') {*/
    /*        display: none;*/
    /*    }*/
    /*}*/

    /*<!--.bubble-content {-->*/
    /*<!--    margin        : 0;-->*/
    /*<!--    position      : absolute;-->*/
    /*<!--    top           : 50%;-->*/
    /*<!--    left          : 50%;-->*/
    /*<!--    margin-right  : -50%;-->*/
    /*<!--    transform     : translate(-50%, -50%);-->*/
    /*<!--    border-radius : 200px;-->*/
    /*<!--    font-size     : 24px;-->*/
    /*<!--    font-weight   : 300;-->*/
    /*<!--    !*background-color: rgb(232, 138, 96);*!-->*/
    /*<!--}-->*/

    /*<!--.bubble-1 {-->*/
    /*<!--    position: absolute;-->*/
    /*<!--    top: -32px;-->*/
    /*<!--    left: 222px;-->*/
    /*<!--    width: 100px;-->*/
    /*<!--    height: 100px;-->*/
    /*<!--}-->*/

    /*.bubble-2 {*/
    /*    position: absolute;*/
    /*    top: 2px;*/
    /*    left: 24px;*/
    /*    width: 200px;*/
    /*    height: 200px;*/
    /*}*/

    /*.bubble-3 {*/
    /*    position: absolute;*/
    /*    top:195px;*/
    /*    left:134px;*/
    /*}*/

    #text {
        width            : 75%;
        font-size        : 30px;
        background-color : rgb(32, 64, 37);
        color            : white;
        margin-top       : 112px;
        margin-bottom    : 112px;
        margin-right     : 142px;
        padding          : 12px;
        line-height      : 42px;
        z-index          : 1;

        @media ('max-width: 992px') {
            width   : 100%;
            margin  : 0;
            display : inline-block;
            height  : auto;
        }
    }

    .center {
        width      : 100%;
        text-align : center;
    }

    .left {
        text-align : left;
    }
</style>
