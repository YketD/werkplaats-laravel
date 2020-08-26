<template>
    <div class="page-container">
        <div class="contact-info-container">
            <h1 class="big-title">
                WERKPLEKKEN
            </h1>
            <div class="info-container">
                <div v-if="prismic.text[0]" class="info">
                    {{prismic.text[0].text}}
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
            <div v-if="true" class="price-cards">
                <pricing-card
                        :price-twelve-month="175"
                        :price-six-month="185"
                        :title="'Onbeperkt'"
                        :months="true"
                        :pro-one="'12 u gratis gebruik vergaderruimten per week<br /><i>mits beschikbaar</i>'"
                        :pro-two="'Wifi / Koffie / Thee'"
                        :pro-three="'toegang 8.00 u – 22.00 u \n op zondag 10.00 u – 17.00 '" />
                <pricing-card
                        :price-twelve-month="220"
                        :price-six-month="235"
                        :title="'Onbeperkt + Vaste plek'"
                        :months="true"
                        :pro-one="'12 u gratis gebruik vergaderruimten per week, <i>mits beschikbaar</i>'"
                        :pro-two="'Wifi / Koffie / Thee'"
                        :pro-three="'toegang 8.00 u – 22.00 u \n op zondag 10.00 u – 17.00 '" />
                <pricing-card
                        :price-twelve-month="150"
                        :price-six-month="150"
                        :title="'3 Dagen per week'"
                        :months="true"
                        :pro-one="'9 u gratis gebruik per week vergaderruimten op de werkdagen, <i>mits beschikbaar</i>'"
                        :pro-two="'Wifi / Koffie / Thee'"
                        :pro-three="'toegang 8.00 u – 22.00 u'" />
                <pricing-card
                        :price-twelve-month="125"
                        :price-six-month="125"
                        :title="'2 Dagen'"
                        :months="true"
                        :pro-one="'6 u gratis gebruik per week vergaderruimten op de werkdagen,<i>mits beschikbaar</i>'"
                        :pro-two="'Wifi / Koffie / Thee'"
                        :pro-three="'toegang 8.00 u – 22.00 u'"
                />
                <pricing-card
                        :price-twelve-month="75"
                        :price-six-month="75"
                        :title="'1 Dag'"
                        :months="true"
                        :pro-one="'3 u gratis gebruik per week vergaderruimten op de werkdag, <i>mits beschikbaar</i>'"
                        :pro-two="'Wifi / Koffie / Thee'"
                        :pro-three="'toegang 8.00 u – 22.00 u'" />
            </div>

            <div class="mobile-menu">
                <a target="_blank" class="mobile-menu-link sub" href="/storage/img/docs/privacy.pdf">
                    <div class="">
                        Privacy policy
                    </div>
                </a>
            </div>
            <div class="content-opaque">
            </div>
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
    import PricingCard from "../components/homepage/Pricing";

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

    .contact-info-container {
        padding-top    : 24px;
        padding-bottom : 24px;
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

    .content {
        display : inline-block;
        height  : auto;
    }

    .price-cards {
        width           : 100%;
        margin-bottom   : 100px;
        display         : flex;
        justify-content : space-evenly;
        flex-wrap       : wrap;
        flex-direction  : revert;
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
