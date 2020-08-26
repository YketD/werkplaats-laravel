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
            </div>
            <div class="opaque"></div>

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
        </div>
    </div>
</template>

<script>
    export default {
        name: "ContactPage",
        methods: {
            sendMail() {
                let accepted = true;
                if (!this.mailData.mail) {
                    this.$notify({ group: 'error', type: 'error', title: 'Mislukt !', text: 'email niet ingevuld' });
                    console.log('false');
                    accepted = false;
                }
                if (!this.mailData.phone) {
                    this.$notify({
                        group: 'error',
                        type: 'error',
                        title: 'Mislukt !',
                        text: 'Telefoonnummer niet ingevuld'
                    });
                    console.log('false');
                    accepted = false;
                }
                if (!this.mailData.name) {
                    this.$notify({ group: 'error', type: 'error', title: 'Mislukt !', text: 'Naam niet ingevuld' });
                    console.log('false');
                    accepted = false;
                }
                if (!this.mailData.message) {
                    this.$notify({ group: 'error', type: 'error', title: 'Mislukt !', text: 'Bericht is leeg' });
                    console.log('false');
                    accepted = false;
                }

                if (accepted)
                    this.$http.post('api/send-message',
                        this.mailData,
                        {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    ).then(response => {
                        this.$notify({
                            group: 'reservations',
                            title: 'Bericht verzonden! ',
                            text: 'We nemen zo spoedig mogelijk contact met u op.',
                        });
                    }).catch(error => {
                        this.$notify({
                            group: 'error',
                            type: 'error',
                            title: 'Mislukt !',
                            text: 'Er is iets fout gegaan. propeer het opnieuw'
                        });
                    });
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

    .privacy-policy {
        top      : 600px;
        position : absolute;

        @media(max-width : 1440px) {
            top: 520px;
            white-space: nowrap;
        }
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
        cursor      : pointer;
    }

    .contact-info-container {
        text-align : left;
        z-index    : 1;
        margin-top:24px;
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
