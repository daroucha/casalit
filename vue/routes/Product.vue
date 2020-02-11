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
              <p v-html="product.details"></p>

              <ul class="cs-page-text-links">
                <li><a href="#" v-scroll-to="'#technical_data'">Ver informações técnicas</a></li>
                <li><a href="#" v-scroll-to="'#download_a'" v-if="product_type.title == 'Telhas'">Baixar instruções de instalação</a></li>
                <li><a href="#" v-scroll-to="'#download_b'" v-if="product_type.folder">Baixar material gráfico</a></li>
              </ul>
            </div>
          </div>

          <div class="cs-page-text-thumbnail">
            <img :src="parseFile(require('../../public/products/' + product.image))" />
          </div>
        </div>
      </div>
    </div>

    <cs-layout use-margin>
      <cs-badge id="technical_data">
        <div class="cs-badge-contents">
          <div class="cs-badge-contents-text limited">
            <p v-if="product_type.title == 'Telhas'">As telhas fabricadas pela Casalit obedecem às Normas Técnicas Brasileiras, NBR 15210-1 e NBR 15210-2.</p>
            <p v-if="product_type.title == 'Telhas'">&nbsp;</p>
            <p>A garantia de 5 anos das telhas Casalit está condicionada à correta instalação, conforme a Norma Técnica Brasileira, NBR 7196.</p>
          </div>

          <div class="cs-badge-contents-table" v-html="product.technicalData" />
        </div>
      </cs-badge>

      <cs-badge range="half" index="1" id="download_b" v-if="product_type.folder">
        <div class="cs-badge-contents-text">
          <h2>Material gráfico</h2>
          <p>Baixar folder com informações técnicas sobre {{ product.name }} Casalit.</p>

          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="47.735" height="83" viewBox="0 0 47.735 83">
            <g transform="translate(-3.586 32.094)">
              <line y2="81" transform="translate(27 -31.094)" stroke-width="2" stroke="rgba(0,0,0,0.54)" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
              <path d="M49.906,12,27.453,34.453,5,12" transform="translate(0 15.453)" fill="none" stroke="rgba(0,0,0,0.54)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
            </g>
          </svg> -->

          <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 48 48"><path d="M24 37.1L13 24 35 24zM20 4H28V8H20zM20 10H28V14H20z"></path><path d="M20 16H28V27H20zM6 40H42V44H6z"></path></svg>

          <a class="center" target="new" :href="parseFile(require('../../public/downloads/' + product_type.folder))">Baixar material gráfico</a>
        </div>
      </cs-badge>

      <cs-badge range="half" index="7" id="download_a" v-if="product_type.title == 'Telhas'">
        <div class="cs-badge-contents-text">
          <h2>Instruções de instalação</h2>
          <p>Baixar filipeta de instrução para instalação de produtos Casalit.</p>

          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="47.735" height="83" viewBox="0 0 47.735 83">
            <g transform="translate(-3.586 32.094)">
              <line y2="81" transform="translate(27 -31.094)" stroke-width="2" stroke="rgba(0,0,0,0.54)" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
              <path d="M49.906,12,27.453,34.453,5,12" transform="translate(0 15.453)" fill="none" stroke="rgba(0,0,0,0.54)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
            </g>
          </svg> -->

          <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 48 48"><path d="M24 37.1L13 24 35 24zM20 4H28V8H20zM20 10H28V14H20z"></path><path d="M20 16H28V27H20zM6 40H42V44H6z"></path></svg>

          <a class="center" target="new" :href="parseFile(require('../../public/downloads/instrucoes_telhas.pdf'))">Baixar instruções de instalação</a>
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
    },
    parseFile: function(obj) {
      return obj.default
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