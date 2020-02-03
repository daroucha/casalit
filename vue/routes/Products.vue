<template>
  <div class="cs-page-products" v-if="!loader">
    <div class="cs-page-company">
      <div class="cs-page-text-container">
        <div class="cs-page-text-content">
          <h1>Produtos</h1>

          <div class="cs-page-text-layout">
            <p>Conheça nossas telhas onduladas em fibrocimento, e nossas peças complementares para telhas onduladas.</p>
          </div>
        </div>
      </div>
    </div>

    <cs-layout use-margin>
      <cs-badge range="half" v-for="type in types" :key="type.id" :index="gridIndex(type.id)">
        <div class="cs-badge-contents-text">
          <h2>{{ type.title }}</h2>
          <p>{{ type.description }}</p>

          <router-link :to="{path: '/type/' + type.id}">Ver {{ type.title }}</router-link>
        </div>

        <div class="cs-badge-contents-thumbnail">
          <img :src="require('../../public/products/' + type.image)" />
        </div>
      </cs-badge>
    </cs-layout>
  </div>
</template>

<script>
import axios from 'axios';
import CsLayout from '../components/CsLayout';
import CsBadge from '../components/CsBadge';

export default {
  components: {
    CsLayout,
    CsBadge
  },
  data() {
    return {
      loader: true,
      product_types: null
    }
  },
  computed: {
    types: function() {
      if (this.product_types != null)
        return this.product_types['hydra:member']
    }
  },
  methods: {
    gridIndex: function(i) {
      if (i % 2 == 0) {
        return 7
      } else {
        return 1
      }
    }
  },
  mounted() {
    axios
      .get('http://localhost:8000/api/product_types')
      .then(response => {
        this.product_types = response.data
        this.loader = false
      })
  }
}
</script>