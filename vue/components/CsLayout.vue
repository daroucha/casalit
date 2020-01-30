<template>
  <div :class="['cs-component-layout', {'use-margin': useMargin}]">
    <slot />
  </div>
</template>

<script>
export default {
  name: 'CsLayout',
  props: {
    useMargin: {
      default: false,
      type: Boolean
    }
  }
}
</script>