import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './router';
import App from './App.vue';

Vue.use(VueRouter);

const app = new Vue({
  components: {App},
  router
}).$mount("#casalit")