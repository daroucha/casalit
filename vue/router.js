import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export default new VueRouter({
  scrollBehavior (to, from, savedPosition) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve({ x: 0, y: 0 })
      }, 500)
    })
  },
  routes: [

    {
      path: '/',
      name: 'Products',
      component: () => import('./routes/Products.vue'),
      meta: {transitionName: 'slide'}
    },
    {
      path: '/type/:id',
      component: () => import('./routes/ProductType.vue'),
      meta: {transitionName: 'slide'}
    },
    {
      path: '/product/:id',
      component: () => import('./routes/Product.vue'),
      meta: {transitionName: 'slide'}
    }
  ]
})