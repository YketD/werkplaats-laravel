<template>
    <div id="app">
        <transition name="fade-in-top" mode="out-in">
            <menu-component v-if="initialLoad" :prismic="prismic" class="menu-component" />
        </transition>
        <transition name="fade" mode="out-in">
            <router-view :prismic="prismic" v-if="initialLoad" />
        </transition>
        <notifications group="reservations" />
        <notifications group="error"/>
    </div>
</template>

<script>
    import '../sass/app.scss'
    import MenuComponent from './components/MenuComponent';

    export default {
        name: 'app',
        components: { MenuComponent },
    }
</script>

<style lang="scss" scoped>
    /*@import "./style/app.scss";*/

    #app {
        font-family             : "Helvetica Neue", Arial, sans-serif;
        font-family : 'Poppins', sans-serif;

        -webkit-font-smoothing  : antialiased;
        -moz-osx-font-smoothing : grayscale;
        text-align              : center;
        margin                  : 84px;

        @media ('max-width: 1440px') {
            margin : 44px
        }

        @media ('max-width: 500px') {
            margin : 12px
        }
    }

    .error {
        background: red;
    }

    .menu-component {
        height        : 350px;
        margin-bottom : 0;
        padding       : 24px;

        @media ('max-width: 920px') {
            height: 28vw;
        }

        @media ('max-width : 500px') {
            margin-bottom : 12px;
        }
    }

    .fade-enter-active, .fade-leave-active {
        transition : all .5s cubic-bezier(0.75, 1.0, 0.1, 0.5);
    }

    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
    {
        opacity    : 0;
        margin-top : 50px;
    }

    .fade-in-top-enter-active, .fade-in-top-leave-active {
        transition : all .5s cubic-bezier(0.75, 1.0, 0.1, 0.5);
    }

    .fade-in-top-enter, .fade-in-top-leave-to /* .fade-leave-active below version 2.1.8 */
    {
        opacity    : 0;
        margin-top : -25px;
    }
</style>
