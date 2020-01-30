<template>
  <div id="app">
    <cs-header></cs-header>

    <!-- <transition mode="in-out"> -->
      <router-view class="cs-view-contents"></router-view>
    <!-- </transition> -->

    <cs-footer></cs-footer>
  </div>
</template>

<script>
import CsHeader from './components/CsHeader';
import CsFooter from './components/CsFooter';

export default {
  components: {
    CsHeader,
    CsFooter
  }
}
</script>