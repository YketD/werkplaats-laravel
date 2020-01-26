<template>
    <div class="page-container">
        <div class="contact-info-container">
            <h1 class="big-title">
                WERKPLEKKEN
            </h1>
            <div class="info-container">
                <div class="info">
                    Op zoek naar een inspirerende ruimte voor het geven van
                    workshops, lezingen of om te vergaderen? Werkplaats 75C heeft hiervoor twee ruimten beschikbaar. De
                    grote workshopruimte- /vergaderruimte is circa 40m² en geschikt voor 20 à 25 personen.
                    De spreekkamer biedt voldoende ruimte voor een overleg met 6 à 8 personen of voor één op één
                    gesprekken. Deze ruimte is circa 15m².
                    Kijk op de kalender om te zien of een ruimte beschikbaar is!
                </div>
            </div>
        </div>
        <div class="opaque"></div>
        <div class="content">
            <div v-if="false" id="bubbles">
                <div class="bubble var-1 bubble-0">
                    <div class="bubble-content">Je hebt de
                                                beschikking
                                                over wifi,
                                                koffie & thee
                    </div>
                </div>
                <div class="bubble var-1 bubble-1">
                    <div class="bubble-content">
                        Toegang
                        tot het pand
                        is van
                        8.00 – 22.00 u.
                    </div>
                </div>
                <div class="bubble var-1 bubble-2">
                    <div class="bubble-content">
                        Je kunt
                        gebruik maken
                        van de workshop-
                        /vergaderruimte
                        en
                        spreekruimte.
                    </div>
                </div>
                <div class="bubble var-1 bubble-3">
                    <div class="bubble-content">Bij ‘onbeperkt’
                                                ook toegang
                                                op
                                                zondag van
                                                10.00 - 17.00 u.
                    </div>
                </div>
            </div>
            <div v-if="false" class="green-content-box">
                <div class="grid">
                    <div class="grid-column"></div>
                    <div class="grid-column bold">6 maanden</div>
                    <div class="grid-column bold">12 maanden</div>
                    <div class="grid-column bold with-under">Vrij gebruik workshop/vergaderruimten
                        <div class="under-text">Mits beschikbaar</div>
                    </div>

                    <div class="grid-column bold">Onbeperkt</div>
                    <div class="grid-column">€ 185,00 per maand</div>
                    <div class="grid-column">€ 175,00 per maand</div>
                    <div class="grid-column">12 uur vrij in te plannen</div>

                    <div class="grid-column bold">Onbeperkt, Vaste werkplek</div>
                    <div class="grid-column">€ 235,00 per maand</div>
                    <div class="grid-column">€ 220,00 per maand</div>
                    <div class="grid-column">12 uur vrij in te plannen</div>

                    <div class="grid-column bold">1 dag per week</div>
                    <div class="grid-column">€ 75,00 per maand</div>
                    <div class="grid-column">€ 75,00 per maand</div>
                    <div class="grid-column">3 uur op de werkdag</div>

                    <div class="grid-column bold">2 dagen per week</div>
                    <div class="grid-column">€ 125,00 per maand</div>
                    <div class="grid-column">€ 125,00 per maand</div>
                    <div class="grid-column">6 uur op de werkdagen</div>

                    <div class="grid-column bold">3 dagen per week</div>
                    <div class="grid-column">€ 150,00 per maand</div>
                    <div class="grid-column">€ 150,00 per maand</div>
                    <div class="grid-column">9 uur op de werkdagen</div>
                </div>
            </div>
            <div v-if="true" class="price-cards">
                <pricing-card
                        :price-two-hour="30"
                        :price-four-hour="60"
                        :price-eight-hour="90"
                        :months="false"
                        :title="'VergaderRuimte klein'"
                        :pro-one="'20 á 25 personen'"
                        :pro-two="'Beschikking over workshop / vergaderruimte'"
                        :pro-three="'Wifi / koffie / thee'"
                />
                <pricing-card
                        :price-two-hour="20"
                        :price-four-hour="40"
                        :price-eight-hour="70"
                        :months="false"
                        :title="'Vergaderruimte groot'"
                        :pro-one="'6 á 8 personen'"
                        :pro-two="'Beschikking over spreekkamer'"
                        :pro-three="'Wifi / Koffie / Thee'"
                />
            </div>

            <div class="opaque"></div>
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

    .contact-info-container {
        z-index: 1;
    }

    .price-cards {
        width           : 100%;
        display         : flex;
        justify-content : space-evenly;
        flex-wrap: wrap;
        flex-direction: revert;
    }

    .info-container {
        width: 61vw;
    }

    /*.opaque-2 {*/
    /*    position         : absolute;*/
    /*    background-color : rgba(255, 255, 255, .5);*/
    /*    top              : 0;*/
    /*    bottom           : 0;*/
    /*    z-index          : 0;*/

    /*    @media ('max-width : 1280px') {*/
    /*        display : none;*/
    /*    }*/
    /*}*/

    h1 {
        font-size   : 42px;
        line-height : 42px;
        text-align  : left;
        color       : rgb(32, 64, 37);
    }

    .grid {
        margin : 12px;
    }

    .grid-column {
        padding : 0px 12px;
        @media ('max-width: 1680px') {
            font-size      : 18px;
            padding-left   : 12px;
            padding-right  : 12px;
            line-height    : 28px;
            padding-top    : 4px;
            padding-bottom : 4px;
        }

        @media ('max-width: 920px') {
            font-size   : 11px;
            line-height : 20px;
            padding     : 0px;
        }
    }

    .under-text {
        @media ('max-width: 1680px') {
            font-size      : 18px;
        }
        @media ('max-width: 920px') {
            font-size   : 11px;
            line-height : 20px;
            padding     : 0px;
        }
    }

    .info {
        width                 : 100%;
        display               : grid;
        grid-template-columns : auto auto;
        text-align            : left;
        font-weight           : 300;
        font-size             : 24px;
        line-height           : 36px;

        @media ('max-width: 920px') {
            width       : 90vw;
            font-size   : 16px;
            line-height : 20px;
        }
    }

    .sub-item {
        font-weight : 200;
    }

    .bubble-content {
        font-size : 18px;
    }

    .icon {
        width : 50%;
    }

    .center {
        width      : 100%;
        text-align : center;
    }

    .left {
        text-align : left;
    }
</style>
