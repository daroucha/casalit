import Vue from 'vue';
import VueNavigation from './components/navigation.vue';
import OrionLogo from './components/orionlogo.vue';
import CasalitLogo from './components/casalitlogo.vue';
import ProductCard from './components/productcard.vue';

new Vue({
  el: '#casalit',
  delimiters: ["[[","]]"],
  components: {
    VueNavigation,
    OrionLogo,
    CasalitLogo,
    ProductCard
  }
})