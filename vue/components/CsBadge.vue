<template>
  <div :class="['cs-component-badge', range, indexClass]">
    <slot />
  </div>
</template>

<script>
export default {
  name: 'CsBadge',
  props: {
    range: String,
    index: {
      default: 1
    }
  },
  computed: {
    indexClass: function () {
      return 'i-' + this.index 
    }
  }
}
</script>