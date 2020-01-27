<template>
    <div class="page-container">
        <div class="contact-info-container">
            <h1 class="big-title">
                CONTACT
            </h1>
            <div class="contact-table">
                <div class="grid-item">Telefoon</div>
                <div class="grid-item sub-item">Renate Roetgerink</div>
                <div class="grid-item sub-item">
                    <a href="tel:0610890480">
                        <font-awesome-icon icon="phone" />
                        06 - 10890480
                    </a>
                </div>
                <div class="grid-item sub-item"></div>
                <div class="grid-item sub-item">Karin Roetgerink</div>
                <div class="grid-item sub-item">
                    <a href="tel:0644744591">
                        <font-awesome-icon icon="phone" />
                        06 - 44744591
                    </a>
                </div>
                <div class="grid-item">Mail</div>
                <div class="grid-item sub-item double">
                    <a href="mailto:info@werkplaats75c.nl">
                        <font-awesome-icon icon="envelope" />
                        info@werkplaats75c.nl
                    </a>
                </div>
                <div class="grid-item">Adres</div>
                <div class="grid-item sub-item double">Grotestraat 75c 7471BL Goor</div>
            </div>
        </div>
        <div class="opaque"></div>
        <div class="content">
            <div id="bubbles">
                <div class="bubble var-1 bubble-1">
                    <div class="bubble-content">
                        <img alt="Restaurant" class="icon" src="/storage/img/icons/restaurant.png">
                        ± 50m
                    </div>
                </div>
                <div class="bubble var-1 bubble-2">
                    <div class="bubble-content">
                        <img alt="Parking" class="icon" src="/storage/img/icons/parking.png">
                        <div class="larger">Gratis</div>
                        in directe omgeving
                    </div>
                </div>
                <div class="bubble var-1 bubble-3">
                    <div class="bubble-content">
                        <img alt="Transit" class="icon" src="/storage/img/icons/transport.png">
                        ± 700m
                    </div>
                </div>
                <a target="_blank" href="/storage/img/docs/privacy.pdf">
                    <div class="privacy-policy">
                        Privacy policy
                    </div>
                </a>
            </div>
            <div class="green-content-box">
                <div class="padding">
                    <div class="left">
                        Wil je meer informatie over de verschillende mogelijkheden bij
                        WP75C? Stuur ons een berichtje via onderstaand formulier of
                        neem telefonisch contact met ons op.
                    </div>
                    <form>
                        <input placeholder="Naam" v-model="mailData.name" />
                        <input placeholder="Mailadres" v-model="mailData.mail" />
                        <input placeholder="Telefoonnummer" v-model="mailData.phone" />
                        <textarea placeholder="Bericht" v-model="mailData.message" />
                        <button @click="sendMail">Verzenden</button>
                    </form>
                </div>
            </div>

            <div class="mobile-menu">
                <a target="_blank" class="mobile-menu-link sub" href="/storage/img/docs/privacy.pdf">
                    <div class="">
                        Privacy policy
                    </div>
                </a>
                <a target="_blank" class="mobile-menu-link sub" href="https://www.facebook.com/werkplaats75c">
                    <div class="">
                        Facebook
                    </div>
                </a>
            </div>
            <div class="opaque"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ContactPage",
        methods: {
            sendMail() {
                this.$http.post('/api/send-mail',
                    this.mailData,
                    {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                )
                ;
            }
        },
        data() {
            return {
                mailData: {
                    name: "",
                    mail: "",
                    phone: "",
                    message: "",
                },
            }
        }
    }
</script>

<style lang="scss" scoped>
    .privacy-policy {
        top      : 600px;
        position : absolute;
    }

    a {
        /*font-weight: 400;*/


        border-radius : 4px;
    }

    .padding {
        padding : 12px;
    }

    h1 {
        font-size   : 42px;
        line-height : 42px;
    }

    form {
        width          : 100%;
        display        : flex;
        flex-direction : column;
        margin-top     : 24px;
    }

    input, textarea {
        margin        : 0px;
        margin-bottom : 24px;
        padding       : 12px;
        font-size     : 24px;
        font-family   : 'Poppins', sans-serif;

        @media ('max-width : 1440px') {
            margin-bottom : 12px;
            padding       : 4px;
        }

        @media ('max-width : 500px') {
            font-size : 14px;
        }
    }

    textarea {
        height : 86px;
    }

    button {
        font-size   : 32px;
        font-family : 'Poppins', sans-serif;
        font-weight : 800;
        color       : white;
        background  : #e88a60;
        border      : none;
        cursor      : poiner;
    }

    .contact-info-container {
        text-align : left;
        z-index    : 1;
    }

    .contact-table {
        width                 : 61vw;
        display               : grid;
        grid-template-columns : .5fr .5fr 1fr;

        .grid-item {
            margin      : 12px;
            margin-left : 0;

            &.double {
                grid-column : 2/ span 2;
            }
        }

        @media ('max-width: 992px') {
            width     : 100%;
            margin    : 0;
            height    : auto;
            font-size : 20px;
        }

        @media ('max-width : 500px') {
            font-size   : 14px;
            line-height : 18px;
        }
    }

    .sub-item {
        font-weight : 200;
    }

    .icon {
        width         : 40%;
        padding-left  : 30%;
        padding-right : 30%;
    }

    .bubble-content {
        display         : flex;
        text-align      : center;
        justify-content : center;
        flex-direction  : column;
        width           : 100%;
        height          : 100%;
        border-radius   : 200px;
        color           : #5b5b5b;
        font-weight     : 300;
        width           : 80%;

        .larger {
            font-size     : 40px;
            margin-bottom : 12px;
        }
    }

    .bubble-1 {
        position : absolute;
        top      : 12px;
        left     : 12px;
        width    : 150px;
        height   : 150px;
    }

    .bubble-2 {
        position : absolute;
        top      : 142px;
        left     : 104px;
        width    : 220px;
        height   : 220px;
    }

    .bubble-3 {
        position : absolute;
        top      : 355px;
    }

    .center {
        width      : 100%;
        text-align : center;
    }

    .left {
        text-align : left;
    }

    .green-content-box {
        @media ('max-width : 500px') {
            font-size   : 14px;
            line-height : 18px;
        }
    }
</style>
