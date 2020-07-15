<template>
    <div class="green-content-box">
        <div class="green-content">
            <div class="grid">
                <div class="grid-item blank light-green">
                    <a target="_blank" href="https://www.judithdepotter.nl" class="image-container">
                        <img src="/storage/img/clients/2.png" />
                    </a>
                </div>
                <div class="grid-item">
                    <a target="_blank" href="https://www.communitycompany.nl" class="image-container image-container-2">
                        <img src="/storage/img/clients/1.jpg" />
                    </a>
                </div>

                <div class="grid-item blank light-grey">
                </div>
                <div class="grid-item blank white">
                    <a target="_blank" href="https://www.detwentsezorgcentra.nl/"
                       class="image-container image-container-3">
                        <img src="/storage/img/clients/4.jpg" />
                    </a>

                </div>
                <div class="grid-item blank grey">
                </div>
                <div class="grid-item blank green">
                </div>
                <div class="grid-item blank light-green">
                </div>
                <div class="grid-item blank green">
                </div>
                <div class="grid-item blank green">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "WerkplaatsInformatie",
        data() {
            return {
                width: window.innerWidth
            }
        }
    }
</script>

<style lang="scss" scoped>
    .normal {
        font-weight : 400;
        font-style  : italic;
    }

    .grid {
        display               : grid;
        height                : 100%;
        grid-template-columns : repeat(4, 1fr);
        grid-template-rows    : repeat(2, 1fr);
        grid-gap              : 50px;
        top                   : 50px;
        @media(max-width : 992px) {
            grid-template-columns : repeat(3, 1fr);
            grid-template-rows    : repeat(2, 1fr);
        }
        @media(max-width : 500px) {
            grid-template-columns : repeat(2, 124px);
            grid-template-rows    : repeat(4, 124px);
            top: 0;
        }


        .grid-item {
            position : relative;

            &.blank {
                background-color : grey;
                border-radius    : 100%;

                &.light-green {
                    background-color : #bccfbf;
                    top              : 20px;
                    left             : 15px;
                }

                &.green {
                    background : #ddffdd;
                    top        : 10px;
                    left       : -15px;
                }

                &.light-grey {
                    background : #a1a1a1
                }

                &.white {
                    background: white;
                }
            }
            border-radius: 100%;

            &:hover {
                transform  : scale(1.02);
                box-shadow : 5px 9px 25px 0px rgba(0, 0, 0, 0.25);
            }
            transition    : all .2s;

            .image-container {
                /*position        : absolute;*/


                &.image-container-2 {

                }

                &image-container-3 {

                }

                height        : 100%;
                width         : 100%;

                border-radius : 100%;
                display       : flex;
                align-items   : center;
                overflow      : hidden;



                img {
                    width      : 100%;
                    object-fit : cover;
                }
            }
        }
    }

    .green-content-box {
        font-size   : 1.5vw;
        line-height : 2.5vw;
        max-height  : 10vw;
        padding: 24px;
        max-width: calc(100% - 48px);


        @media ('max-width : 500px') {
            font-size : 14px;
        }
    }

    .green-content {
        align-items : center;
    }

    .center {
        background : rgba(0, 0, 0, 0.2);
        padding    : 10px;
        margin     : 26px;
        display    : inline-block;
    }

</style>
