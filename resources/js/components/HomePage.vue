<template>
    <div class="page-container">
        <div class="big-title">
            <h1>Werkplaats <br />75c<span class="dot">.</span></h1>
            <h2>Meer dan alleen aan het werk gaan.</h2>
        </div>
        <div class="opaque"></div>

        <content-with-bubbles class="content" />
    </div>
</template>

<script>
    import ContentWithBubbles from "./ContentWithBubbles";

    export default {
        name: "HomePage",
        components: { ContentWithBubbles },
        data() {
            return {
                msg: "ww",
            }
        }
    }
</script>

<style lang="scss" scoped>

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
