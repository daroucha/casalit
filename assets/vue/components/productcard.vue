<template>
  <div class="product-card">
    <div class="content">
      <div class="picture">
        <img :src="picture" :alt="title">
      </div>

      <div class="data">
        <h3 v-html="title" />
        <a :href="path">
          <span>Ver tudo</span>

          <div class="arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="23.899" height="13.414" viewBox="0 0 23.899 13.414">
              <g id="arrows_long_right" transform="translate(0 0.707)">
                <path id="Shape" d="M22,0H0" transform="translate(0 6)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                <path id="Shape-2" data-name="Shape" d="M0,0,6,6,0,12" transform="translate(16.485)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
              </g>
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProductCard',
  props: {
    title: {
      required: true,
      type: String
    },
    path: {
      required: true
    },
    picture: String
  }
}
</script>