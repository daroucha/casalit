import Vue from 'vue';
import VueCarousel from 'vue-carousel';
import CsLayout from '../../vue/components/CsLayout';
import CsBadge from '../../vue/components/CsBadge';
import next from '../images/angle_right@2x.png';
import prev from '../images/angle_left@2x.png';
import $ from 'jquery';

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
  },
  mounted () {
    window.onscroll = function() {
      if (window.pageYOffset > 76) {
        $('#casalit').addClass('minimized')
      } else {
        $('#casalit').removeClass('minimized')
      }
    }
  }
})