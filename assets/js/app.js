import Vue from 'vue';
import VueCarousel from 'vue-carousel';
import CsLayout from '../../vue/components/CsLayout';
import CsBadge from '../../vue/components/CsBadge';

Vue.use(VueCarousel);

new Vue({
  el: '#casalit',
  components: {
    CsLayout,
    CsBadge
  }
})