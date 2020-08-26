<template>
    <div class="page-container">
        <div class="big-title">
            <h1>Werkplaats <br />75C<span class="dot">.</span></h1>
            <h2>Meer dan alleen aan het werk gaan.</h2>
        </div>
        <div class="opaque"></div>

        <content-with-bubbles class="content" />

        <div class="privacy-policy-container">
            <a target="_blank" href="/storage/img/docs/privacy.pdf">
                <div class="privacy-policy">
                    Privacy policy
                </div>
            </a>
        </div>
        <div class="socials-container">
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
    import ContentWithBubbles from "./ContentWithBubbles";
    import axios from 'axios';

    export default {
        name: "HomePage",
        components: { ContentWithBubbles },
        data() {
            return {
                msg: "ww",
            }
        },



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

    h1 {
        font-size   : 10vw;
        font-weight : 700;
        text-align  : left;
        color       : rgb(32, 64, 37);
        line-height : 10vw;
        font-family : 'Poppins', sans-serif;
        position    : relative;

        @media ('max-width: 920px') {
            font-size   : 14vw;
            line-height : 14vw;
        }

        @media ('max-width: 620px') {
            font-size   : 14vw;
            line-height : 14vw;
        }

        @media ('max-width: 500px') {
            padding : 14px
        }
    }

    h2 {
        text-align  : left;
        font-size   : 3vw;
        font-family : 'Poppins', sans-serif;
        font-weight : 300;
        z-index     : 2;

        @media ('max-width: 992px') {
            font-size   : 36px;
            line-height : 36px;
        }

        @media ('max-width: 992px') {
            font-size   : 32px;
            line-height : 32px;
            color       : white;
            text-align  : center;
        }

        @media ('max-width : 720px') {
            font-size : 18px;

        }
    }


    .big-title {
        height   : 24vw;
        z-index  : 300;
        position : relative;
        width    : auto;


        @media ('max-width : 992px') {
            /*height: 340px;*/
            background-size : cover;
            overflow        : hidden;
            margin-bottom   : 24px;
        }

        @media ('max-width: 720px') {
            height : 240px;
        }

        @media ('max-width: 500px') {
            height           : 170px;
            background-image : url("/storage/img/homepage.png");

        }
    }

    .dot {
        color         : rgb(232, 138, 96);
        display       : inline-block;
        font-family   : none;
        border-radius : 200px;
    }


</style>
