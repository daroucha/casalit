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
            <img :src="parseFile(require('../../public/products/' + product_type.image))" />
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
          <img :src="parseFile(require('../../public/products/' + product.image))" />
        </div>
      </cs-badge>
    </cs-layout>
  </div>

  <div class="cs-page-products" v-else>
    <div class="cs-page-loader">
      <svg class="cs-header-nav-route-symbol stroke" xmlns="http://www.w3.org/2000/svg" width="28.595" height="19.003" viewBox="0 0 28.595 19.003">
        <path d="M27.378,6.256,22.718,4.5,16.449,2.135c-.752-.284-1.5-.571-2.258-.848a1.8,1.8,0,0,0-.386-.064c-.309-.042-.617-.082-.925-.122l-.8-.1-.918-.12-.79-.1L9.451.651l-.8-.1L7.742.427l-.8-.1L6.133.217l-.79-.1L4.56.012A.111.111,0,0,1,4.531,0H4.492a.63.63,0,0,0-.053.069L.849,6.4.024,7.852A.344.344,0,0,1,0,7.886V7.9a.072.072,0,0,0,.07.042H2.042v8.051l10.71,2,.025,0,12.834-.819V6.233l.2.015.8.067.928.074A.337.337,0,0,1,27.6,6.4v-.07C27.523,6.3,27.45,6.283,27.378,6.256ZM12.587,17.547l-10.135-1.9V7.633L2.534,7.5,5.206,3.216Q5.836,2.207,6.465,1.2c.024-.039.042-.041.074-.024q3.023,1.646,6.046,3.286Zm.685-12.717c.277.151.553.309.833.448a.736.736,0,0,0,.273.05c.392.034.784.065,1.176.1l.962.075,1.132.093q.391.032.783.058l1.132.092c.254.021.509.04.763.058l1.156.094.753.058L23.4,6.05l.768.058,1.152.094h-.117V16.8L13,17.576V4.682Z" transform="translate(0.5 0.5)"/>
      </svg>
    </div>
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
          .get('http://casalit.com.br' + url[index])
          .then(response => {
            this.products_object.push(response.data)
          })
      }
    },
    parseFile: function(obj) {
      return obj.default
    }
  },
  mounted() {
    axios
      .get('http://casalit.com.br/api/product_types/' + this.id)
      .then(response => {
        this.product_type = response.data
        this.retrieveProducts(this.product_type['products'])
        this.loader = false
      })
  }
}
</script>