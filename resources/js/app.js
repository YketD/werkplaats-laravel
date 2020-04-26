require('./bootstrap');
import Vue from 'vue';
import App from './App.vue';
import axios from 'axios';
import HomePage from "./components/HomePage.vue";
import VueRouter from "vue-router";
import WerkplekHurenPage from "./components/WerkplekHurenPage";
import ContactPage from "./components/ContactPage";
import ReserverenPage from "./components/ReserverenPage";
import OverOns from "./components/homepage/OverOns"
import Pricing from "./components/homepage/Pricing"
import privacy from "./components/homepage/privacy"
import WerkplaatsInformatie from "./components/homepage/WerkplaatsInformatie";
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPhone, faEnvelope, faExternalLinkAlt } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import Notifications from 'vue-notification'
import VCalendar from 'v-calendar';
import VueTimePicker from 'vue2-timepicker';
import 'vue2-timepicker/dist/VueTimepicker.css'
import PrismicVue from "prismic-vue";
import linkresolver from '../plugins/LinkResolver.js';

Vue.use(VueTimePicker);
Vue.use(VueRouter);
Vue.use(Notifications);
Vue.use(VCalendar);

Vue.use(PrismicVue, {
    endpoint: window.prismic.endpoint,
    linkresolver
});

Vue.config.productionTip = false;
Vue.prototype.$http = axios;

library.add(faPhone);
library.add(faEnvelope);
library.add(faExternalLinkAlt);

Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.component('vue-time-picker', VueTimePicker);

const routes = [
    {
        path: '/', name: 'home', component: HomePage, children: [
            { path: 'over-ons', component: OverOns },
            { path: '/', name: 'home', component: WerkplaatsInformatie },
            { path: '/privacy', component: privacy }
        ]
    },
    { path: '/contact', name: 'contact', component: ContactPage },
    { path: '/werkplek-huren', name: 'werkplek_huren', component: WerkplekHurenPage },
    { path: '/reserveren', name: 'ruimte_reserveren', component: ReserverenPage }
];

const router = new VueRouter({
    routes
});

new Vue({
    router,
    render: h => h(App),
}).$mount('#app');
