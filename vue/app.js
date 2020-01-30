import Vue from 'vue';
import VueRouter from 'vue-router';
import VueCarousel from 'vue-carousel';
import router from './router';
import App from './App.vue';

Vue.use(VueRouter);
Vue.use(VueCarousel);

const app = new Vue({
  components: {App},
  router
}).$mount("#casalit")