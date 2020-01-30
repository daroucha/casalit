import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export default new VueRouter({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: () => import('./routes/Home.vue')
    },
    {
      path: '/company',
      name: 'Company',
      component: () => import('./routes/Company.vue')
    },
    {
      path: '/products',
      name: 'Products',
      component: () => import('./routes/Products.vue')
    },
    {
      path: '/contact',
      name: 'Contact',
      component: () => import('./routes/Contact.vue')
    }
  ]
})