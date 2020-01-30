<template>
  <div id="app">
    <cs-header></cs-header>

    <transition mode="in-out">
      <router-view class="cs-view-contents"></router-view>
    </transition>
  </div>
</template>

<script>
import CsHeader from './components/CsHeader';

export default {
  components: {CsHeader}
}
</script>