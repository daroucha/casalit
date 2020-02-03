<template>
  <div class="cs-page-products" v-if="!loader">
    <div class="cs-page-company cs-page-product-type">
      <div class="cs-page-text-container">
        <ul class="cs-breadcrumb">
          <li class="cs-bc-ref">Você está aqui:</li>
          <li class="cs-bc-path"><router-link :to="{name: 'Products'}">Produtos</router-link></li>
          <li class="cs-bc-separator">/</li>
          <li class="cs-bc-path">{{ product_type.title }}</li>
        </ul>

        <div class="cs-page-inline-container">
          <div class="cs-page-text-content">
            <h1>{{ product_type.title }}</h1>

            <div class="cs-page-text-layout">
              <p>{{ product_type.details }}</p>
            </div>
          </div>

          <div class="cs-page-text-thumbnail">
            <img :src="require('../../public/products/' + product_type.image)" />
          </div>
        </div>
      </div>
    </div>

    <router-view></router-view>

    <cs-layout use-margin>
      <cs-badge range="half" v-for="product in products_object" :key="product.id" :index="gridIndex(product.id)">
        <div class="cs-badge-contents-text">
          <h2>{{ product.name }}</h2>
          <p>{{ product.description }}</p>

          <router-link :to="{path: '/product/' + product.id}">Ver {{ product.name }}</router-link>
        </div>

        <div class="cs-badge-contents-thumbnail" v-if="product.image != null">
          <img :src="require('../../public/products/' + product.image)" />
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
      id: this.$route.params.id,
      loader: true,
      products_object: null,
      product_type: null
    }
  },
  watch: {
    products_object: function(newVal, oldVal) {
      if (newVal != null)
        return this.products_object = newVal
    }
  },
  methods: {
    gridIndex: function(i) {
      if (i % 2 == 0) {
        return 7
      } else {
        return 1
      }
    },
    retrieveProducts: function(url) {
      this.products_object = []

      for (let index = 0; index < url.length; index++) {
        axios
          .get('http://localhost:8000' + url[index])
          .then(response => {
            this.products_object.push(response.data)
          })
      }
    }
  },
  mounted() {
    axios
      .get('http://localhost:8000/api/product_types/' + this.id)
      .then(response => {
        this.product_type = response.data
        this.retrieveProducts(this.product_type['products'])
        this.loader = false
      })
  }
}
</script>