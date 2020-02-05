import Vue from 'vue';
import VueRouter from 'vue-router';
import VueCarousel from 'vue-carousel';
import VueScrollTo from 'vue-scrollto';
import router from './router';
import App from './App.vue';

Vue.use(VueRouter);
Vue.use(VueCarousel);
Vue.use(VueScrollTo);

const app = new Vue({
  components: {App},
  router
}).$mount("#casalit")