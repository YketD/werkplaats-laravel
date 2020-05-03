<template>
    <div class="green-content-box">
        <div class="green-content">
            <div class="grid">
                <div class="grid-item">
                    <a target="_blank" href="https://www.judithdepotter.nl" class="image-container">
                        <img src="/storage/img/clients/2.png" />
                    </a>
                </div>
                <div class="grid-item">
                    <a target="_blank" href="https://www.communitycompany.nl" class="image-container image-container-2">
                        <img src="/storage/img/clients/1.jpg" />
                    </a>
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
        grid-template-columns : repeat(2, 20vw);
        grid-template-rows    : repeat(1, 20vw);

        @media(max-width : 992px) {
            grid-template-columns : repeat(1, 90vw);
            grid-template-rows    : repeat(2, 50vw);
            grid-gap              : 0px;
            top: 0;
        }

        grid-gap              : 50px;
        top                   : 50px;

        .grid-item {
            position : relative;

            .image-container {
                /*position        : absolute;*/
                top           : 1vw;
                left          : 2vw;

                &.image-container-2 {
                    top  : 5vw;
                    left : 5vw;
                }

                height        : 15vw;
                width         : 15vw;
                @media(max-width : 992px) {
                    height : 50vw;
                    width  : 50vw;
                    left   : 25vw;
                }
                border-radius : 100%;
                background    : #dddddd;
                display       : flex;
                align-items   : center;
                overflow      : hidden;
                transition    : all .2s;

                &:hover {
                    transform  : scale(1.02);
                    box-shadow : 5px 9px 25px 0px rgba(0, 0, 0, 0.25);
                }

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
