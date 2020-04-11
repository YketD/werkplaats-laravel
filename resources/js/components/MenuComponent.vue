<template>
    <div class="menu-container">
        <div class="menu-logo">
            <img class="logo" src="/storage/img/werkplaats75c.png" />
        </div>
        <div class="right-menu-container">
            <div class="menu-options">
                <router-link class="menu-item" to="/">Home</router-link>
                <router-link class="menu-item" to="/contact">Contact</router-link>
                <router-link class="menu-item" to="/werkplek-huren">Werkplek huren</router-link>
                <router-link class="menu-item" to="/reserveren">Ruimte reserveren</router-link>
                <div class="calendar-icon-container menu-item">
                    <a href="https://www.supersaas.nl/schedule/werkplaats75c/ruimte_reserveren" target="_blank">
                        <div class="calendar-icon">
                            <img class="icon" src="/storage/img/icons/calendar-2.png" />
                        </div>
                    </a>
                </div>
            </div>

            <div class="image-container">
                <transition name="fade" mode="out-in">
                    <img class="img" :key="menuImage" :src="imgSrc">
                </transition>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "MenuComponent",
        data() {
            return {
                menuImage: '/',
            }
        },
        computed: {
            imgSrc() {
                let src = '/storage/img/homepage.png';

                if (this.$route.path === '/werkplek-huren') {
                    src = '/storage/img/huren.png';
                }
                if (this.$route.path === '/reserveren') {
                    src = '/storage/img/create.png';
                }
                if (this.$route.path === '/contact') {
                    src = '/storage/img/map.png';
                }
                this.menuImage = this.$route.path;
                return src;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .router-link-exact-active {
        padding-bottom  : 16px;
        text-decoration : underline;
    }

    .menu-container {
        background      : #8f9e92;
        display         : flex;
        justify-content : space-between;
        box-shadow      : 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

        @media ('max-width: 992px') {
            height          : 30vw;
            justify-content : start;
        }
    }

    .logo {
        height : 100%;

        @media ('max-width: 1280px') {
            width  : 100%;
            height : auto;
        }
    }

    .menu-logo {
        width : 30%;

        @media ('max-width: 992px') {
            width : 35%;
        }
    }

    .menu-options {
        width           : 100%;
        display         : flex;
        height          : 15px;
        justify-content : space-between;
        margin-bottom   : 24px;
        font-family     : 'Poppins', sans-serif;
        font-weight     : 300;
        font-size       : 32px;

        @media ('max-width: 1620px ') {
            font-size: 28px;
        }

        @media ('max-width: 1420px') {
            font-size : 24px;
        }

        @media ('max-width: 1280px') {
            font-size : 20px;
        }

        @media ('max-width: 992px') {
            flex-direction : column;
            font-size      : 32px;
            height         : 100%;
        }

        @media('max-width: 720px') {
            font-size  : 24px;
            text-align : left;
        }

        @media ('max-width: 500px') {
            font-size    : 18px;
            padding-left : 12px;
        }
    }

    .menu-item {
        height                     : 100%;
        transition-property        : transform, text-shadow;
        transition-duration        : .3s;
        transition-timing-function : cubic-bezier(1.5, 2, 0.175, 1);

        &:hover {
            transform   : scale(1.1);
            text-shadow : 0 3px 6px rgba(0, 0, 0, 0.35);

            @media('max-width: 1024px') {
                transform   : none;
                text-shadow : none;
            }
        }

        @media ('max-width : 992px') {
            padding   : 0;
            font-size : 3vw;
        }
        @media ('max-width : 500px') {
            font-size : 13px;
            height    : 20%;
        }
    }

    a {
        color : white;
    }

    .right-menu-container {
        width          : 70%;
        display        : flex;
        flex-direction : column;
    }

    .img {
        width      : 80%;
        box-shadow : 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .image-container {
        width           : 100%;
        display         : flex;
        align-content   : center;
        justify-content : center;
        margin-top      : 24px;

        @media ('max-width: 992px') {
            display : none;
        }
    }

    .calendar-icon-container {
        text-align      : right;
        justify-content : right;
        display         : flex;
        align-content   : flex-end;
        flex-direction  : row;

        a {
            @media('max-width : 920px') {
                width : 100%;
                .calendar-icon {
                    width      : 100%;
                    text-align : center;


                }
            }
            @media ('max-width : 500px') {
                .calendar-icon {
                    text-align : left;
                    width: 100%;
                }
            }
        }
    }

    .calendar-icon {
        width                      : 80px;
        text-align                 : right;
        margin-left                : auto;
        transition-property        : transform, filter;
        transition-duration        : .3s;
        transition-timing-function : cubic-bezier(1.5, 2, 0.175, 1);


        &:hover {
            transform : scale(1.1);
            filter    : drop-shadow(0 3px 6px rgba(0, 0, 0, 0.35));
        }

        @media ('max-width: 992px') {
            margin-top     : 5px;
            display        : flex;
            flex-direction : row;
            &:after {
                content    : "Kalender";
                width      : 100%;
            }
        }

        img {
            width : 100%;

            @media ('max-width: 992px') {
                display : none;
            }
            /*-webkit-filter: drop-shadow(2px 2px 1px #fff);*/

            /*border-radius: 4px;*/
        }
    }
</style>
