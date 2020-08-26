<template>
    <div class="content">
        <div id="bubbles">
            <router-link to="/" class="bubble bubble-0">
                <div class="bubble-content">Werkplaats 75c</div>
            </router-link>
            <router-link to="/over-ons" class="bubble bubble-1">
                <div class="bubble-content">Over ons</div>
            </router-link>
            <router-link to="/ondernemers" class="bubble bubble-2">
                <div class="bubble-content">Ondernemers WP75C</div>
            </router-link>
            <div class="bubble bubble-3 dark">
                <div class="bubble-content">Activiteiten WP75C</div>
            </div>
        </div>

        <div class="content-opaque"></div>

        <transition name="fade" mode="out-in">
            <router-view class="green-content-box" />
        </transition>

        <div class="mobile-menu">
            <router-link to="/" class="mobile-menu-link">Werkplaats 75C</router-link>
            <router-link to="/over-ons" class="mobile-menu-link">Over ons</router-link>
            <router-link to="/ondernemers" class="mobile-menu-link">Ondernemers WP75C </router-link>
            <div class="mobile-menu-link inactive">Activiteiten WP75C</div>
            <a target="_blank" class="mobile-menu-link sub" href="/storage/img/docs/privacy.pdf">
                <div class="">
                    Privacy policy
                </div>
            </a>
        </div>

        <div class="small-bubbles">
            <div class="small-bubble"></div>
            <div class="small-bubble"></div>
            <div class="small-bubble"></div>
            <div class="small-bubble">
                <img class="icon" src="/storage/img/icons/parking.png" />
            </div>
            <div class="small-bubble">
                <img class="icon" src="/storage/img/icons/restaurant.png" />
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ContentWithBubbles",
    }
</script>

<style lang="scss" scoped>

    #bubbles {
        z-index: 1;
        position : relative;

        @media ('max-width :1440px') {
            margin-top : 50px;
        }
    }

    .mobile-menu {
        display: none;
        @media ('max-width:500px') {
            display:block;
            width: 100%;
        }
    }

    .center {
        width      : 100%;
        text-align : center;
    }

    .mobile-menu-link {
        width: 100%;
        color: white;
        display: block;
        margin: 12px 0 6px 0;
        background: #e88a60;

        &.inactive{
            background-color : rgba(232, 138, 96, .5);
            color            : #bccfbf;
        }

        &.sub{
            background-color: #bccfbf;
            color: black;
        }
    }
</style>
