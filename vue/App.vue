<template>
  <div id="app">
    <cs-header></cs-header>

    <transition
      :name="transitionName"
      mode="out-in"
    >
      <router-view class="cs-view-contents"></router-view>
    </transition>

    <cs-footer></cs-footer>
  </div>
</template>

<script>
const DEFAULT_TRANSITION = 'fade';

import CsHeader from './components/CsHeader';
import CsFooter from './components/CsFooter';

export default {
  components: {
    CsHeader,
    CsFooter
  },
  data () {
    return {
      prevHeight: 0,
      transitionName: DEFAULT_TRANSITION
    }
  },
  created() {
    this.$router.beforeEach((to, from, next) => {
      let transitionName = to.meta.transitionName || from.meta.transitionName;

      if (transitionName === 'slide') {
        const toDepth = to.path.split('/').length;
        const fromDepth = from.path.split('/').length;
        transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left';
      }

      this.transitionName = transitionName || DEFAULT_TRANSITION;
      next();
    })
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
}
</script>