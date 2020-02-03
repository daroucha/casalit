<template>
  <div class="cs-page-products" v-if="!loader">
    <div class="cs-page-company cs-page-product-type cs-page-product-single">
      <div class="cs-page-text-container">
        <ul class="cs-breadcrumb">
          <li class="cs-bc-ref">Você está aqui:</li>
          <li class="cs-bc-path"><router-link :to="{name: 'Products'}">Produtos</router-link></li>
          <li class="cs-bc-separator">/</li>
          <li class="cs-bc-path"><router-link :to="{path: '/type/' + product_type.id}">{{ product_type.title }}</router-link></li>
          <li class="cs-bc-separator">/</li>
          <li class="cs-bc-path">{{ product.name }}</li>
        </ul>

        <div class="cs-page-inline-container">
          <div class="cs-page-text-content">
            <h1>{{ product.name }}</h1>

            <div class="cs-page-text-layout">
              <p>{{ product.details }}</p>

              <ul class="cs-page-text-links">
                <li><a href="#technical_data">Ver informações técnicas</a></li>
                <li><a href="#download">Baixar instruções de instalação</a></li>
                <li><a href="#download">Baixar material gráfico</a></li>
              </ul>
            </div>
          </div>

          <div class="cs-page-text-thumbnail">
            <img :src="require('../../public/products/' + product.image)" />
          </div>
        </div>
      </div>
    </div>

    <cs-layout use-margin>
      <cs-badge id="technical_data">
        <div class="cs-badge-contents">
          <div class="cs-badge-contents-text limited">
            <p>As telhas fabricadas pela Casalit obedecem às Normas Técnicas Brasileiras, NBR 15210-1 e NBR 15210-2.</p>
            <p>&nbsp;</p>
            <p>A garantia de 5 anos das telhas Casalit está condicionada à correta instalação, conforme a Norma Técnica Brasileira, NBR 7196.</p>
          </div>

          <div class="cs-badge-contents-table" v-html="product.technicalData" />
        </div>
      </cs-badge>

      <cs-badge range="half" index="1" id="download">
        <div class="cs-badge-contents-text">
          <h2>Instruções de instalação</h2>
          <p>Baixar filipeta de instrução para instalação de telhas onduladas Casalit.</p>

          <router-link :to="{name: 'Company'}">Conheça a Casalit</router-link>
        </div>
      </cs-badge>

      <cs-badge range="half" index="7">
        <div class="cs-badge-contents-text">
          <h2>Material gráfico</h2>
          <p>Baixar folder com informações técnicas sobre as telhas onduladas Casalit.</p>

          <router-link :to="{name: 'Company'}">Conheça a Casalit</router-link>
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
      product: null,
      product_type: null
    }
  },
  methods: {
    retrieveType: function(url) {
      axios
        .get('http://localhost:8000' + url)
        .then(response => {
          this.product_type = response.data
        })
    }
  },
  mounted() {
    axios
      .get('http://localhost:8000/api/products/' + this.id)
      .then(response => {
        this.product = response.data
        this.retrieveType(this.product['type'])
        this.loader = false
      })
  }
}
</script>