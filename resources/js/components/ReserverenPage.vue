<template>
    <div class="page-container">
        <div class="contact-info-container">
            <h1 v-if="prismic" class="big-title">
                {{ prismic.titel[0].text }}
            </h1>
            <h1 v-else>
                WERKRUIMTEN
            </h1>
            <div class="info-container">
                <div v-if="prismic.text[0]" class="info">
                    {{prismic.text[0].text}}
                </div>
                <div v-else class="info">
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
                        :price-six-hour="90"
                        :price-eight-hour="120"
                        :months="false"
                        :title="'Workshop-/ vergaderruimte'"
                        :pro-one="'20 á 25 personen'"
                        :pro-two="'Wifi / koffie / thee'"
                />
                <pricing-card
                        :price-two-hour="20"
                        :price-four-hour="40"
                        :price-six-hour="60"
                        :price-eight-hour="80"
                        :months="false"
                        :title="'Spreekkamer'"
                        :pro-one="'6 á 8 personen'"
                        :pro-two="'Wifi / Koffie / Thee'"
                />
            </div>
            <div class="opaque"></div>
            <div style="position: absolute; right: 12px; text-align: right;">
                <a class="facebook" href="https://www.facebook.com/werkplaats75c">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>

                <a class="instagram" href="https://www.facebook.com/werkplaats75c">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                    </svg>
                </a>
                <a target="_blank" href="/storage/img/docs/privacy.pdf">
                    <div class="privacy-policy">
                        Privacy policy
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    import PricingCard from "../components/homepage/ReservationPricing";

    export default {
        name: "ContactPage",
        components: { PricingCard },
        props: { prismic }
    }
</script>

<style lang="scss" scoped>
    .facebook {
        position : absolute;
        bottom   : 30px;
        z-index  : 1;
        right    : 12px;
        @media('max-width: 500px') {
            display : none;
        }
    }

    .instagram {
        position : absolute;
        bottom   : 60px;
        z-index  : 1;
        right    : 12px;
        @media('max-width: 500px') {
            display : none;
        }
    }

    .description-title {
        margin-top  : 64px;
        text-align  : center;
        z-index     : 2;
        font-weight : 700;
        @media('max-width: 500px') {
            margin-top : 32px;
            font-size  : 18px;
        }
    }

    .description-sub {
        z-index : 2;
        @media('max-width: 500px') {
            font-size      : 14px;
            line-height    : 18px;
            padding        : 16px;
            padding-bottom : 0;
        }
    }

    .privacy-policy {
        position    : absolute;
        bottom      : 0;
        z-index     : 1;
        right       : 12px;
        white-space : nowrap;

        @media('max-width: 500px') {
            display : none;
        }
    }

    .price-cards {
        max-width     : 60vw;
        margin-bottom : 100px;
        @media('max-width: 992px') {
            max-width     : unset;
            margin-bottom : 30px;
        }
    }

    .content {
        display : inline-block;
        height  : auto;
    }

    .contact-info-container {
        z-index        : 1;
        margin-top     : 24px;
        padding-bottom : 24px;
    }

    .price-cards {
        width           : 100%;
        display         : flex;
        justify-content : space-evenly;
        flex-wrap       : wrap;
        flex-direction  : revert;
    }

    .info-container {
        width : 61vw;
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
            font-size : 18px;
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
