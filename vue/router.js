import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export default new VueRouter({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: () => import('./routes/Home.vue'),
      meta: {transitionName: 'slide'}
    },
    {
      path: '/company',
      name: 'Company',
      component: () => import('./routes/Company.vue'),
      meta: {transitionName: 'slide'}
    },
    {
      path: '/products',
      name: 'Products',
      component: () => import('./routes/Products.vue'),
      meta: {transitionName: 'slide'}
    },
    {
      path: '/contact',
      name: 'Contact',
      component: () => import('./routes/Contact.vue'),
      meta: {transitionName: 'slide'}
    }
  ]
})