import Vue from 'vue';
import VueCarousel from 'vue-carousel';
import CsLayout from '../../vue/components/CsLayout';
import CsBadge from '../../vue/components/CsBadge';
import next from '../images/angle_right@2x.png';
import prev from '../images/angle_left@2x.png';

Vue.use(VueCarousel);

new Vue({
  el: '#casalit',
  data() {
    return {
      nextLabel: "<img src='" + next + "' />",
      prevLabel: "<img src='" + prev + "' />"
    }
  },
  components: {
    CsLayout,
    CsBadge
  }
})