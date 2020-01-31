<template>
  <div class="cs-page-home">
    <div class="cs-page-carousel">
      <carousel 
      :scrollPerPage="false" 
      :navigationEnabled="true" 
      :centerMode="false" 
      :perPage="1" 
      :loop="true" 
      :autoplay="false"
      paginationActiveColor="#FFF"
      paginationColor="rgba(255, 255, 255, 0.54)"
      >
        <slide data-index="0">
          <div class="cs-carousel-content" :style="'background-image: url(' + require('../../assets/images/banner-slogan-1.png') + ')'" />
        </slide>

        <slide>
          <div class="cs-carousel-content" :style="'background-image: url(' + require('../../assets/images/banner-pecas-complementares-2.png') + ')'" />
        </slide>
      </carousel>
    </div>

    <cs-layout use-margin>
      <cs-badge>
        <div class="cs-badge-contents">
          <div class="cs-badge-contents-text">
            <h2>
              <svg class="cs-header-nav-route-symbol" xmlns="http://www.w3.org/2000/svg" width="26.27" height="18" viewBox="0 0 26.27 18">
                <path d="M13.093,3.038a.821.821,0,0,0-.516.218L.263,14.687a.821.821,0,0,0,.558,1.424H3.284v4.925H4.926V16.111H21.344v4.925h1.642V16.111h2.463a.821.821,0,0,0,.558-1.424l-4.662-4.329V4.618H19.7V8.835l-6.009-5.58a.821.821,0,0,0-.6-.218Zm.042,1.94,10.223,9.492H2.912Z" transform="translate(0 -3.036)"/>
              </svg>

              <span>Produtos</span>
            </h2>
            <p>Conheça nossas telhas onduladas em fibrocimento, e nossas peças complementares para telhas onduladas.</p>

            <router-link :to="{name: 'Products'}">Conheça nossos produtos</router-link>
          </div>

          <div class="cs-badge-contents-thumbnail">
            <img :src="require('../../public/images/5e2efd25beecd639352958.png')" />
            <img :src="require('../../public/images/5e2f27b21b778373021723.png')" />
          </div>
        </div>
      </cs-badge>

      <cs-badge range="half" index="1">
        <div class="cs-badge-contents-text">
          <h2>
            <svg class="cs-header-nav-route-symbol stroke" xmlns="http://www.w3.org/2000/svg" width="28.595" height="19.003" viewBox="0 0 28.595 19.003">
              <path d="M27.378,6.256,22.718,4.5,16.449,2.135c-.752-.284-1.5-.571-2.258-.848a1.8,1.8,0,0,0-.386-.064c-.309-.042-.617-.082-.925-.122l-.8-.1-.918-.12-.79-.1L9.451.651l-.8-.1L7.742.427l-.8-.1L6.133.217l-.79-.1L4.56.012A.111.111,0,0,1,4.531,0H4.492a.63.63,0,0,0-.053.069L.849,6.4.024,7.852A.344.344,0,0,1,0,7.886V7.9a.072.072,0,0,0,.07.042H2.042v8.051l10.71,2,.025,0,12.834-.819V6.233l.2.015.8.067.928.074A.337.337,0,0,1,27.6,6.4v-.07C27.523,6.3,27.45,6.283,27.378,6.256ZM12.587,17.547l-10.135-1.9V7.633L2.534,7.5,5.206,3.216Q5.836,2.207,6.465,1.2c.024-.039.042-.041.074-.024q3.023,1.646,6.046,3.286Zm.685-12.717c.277.151.553.309.833.448a.736.736,0,0,0,.273.05c.392.034.784.065,1.176.1l.962.075,1.132.093q.391.032.783.058l1.132.092c.254.021.509.04.763.058l1.156.094.753.058L23.4,6.05l.768.058,1.152.094h-.117V16.8L13,17.576V4.682Z" transform="translate(0.5 0.5)"/>
            </svg>

            <span>Empresa</span>
          </h2>
          <p>A Casalit é uma empresa brasileira especializada na fabricação de telhas e artefatos de fibrocimento.</p>

          <router-link :to="{name: 'Company'}">Conheça a Casalit</router-link>
        </div>
      </cs-badge>

      <cs-badge range="half" index="7">
        <div class="cs-badge-contents-text">
          <h2>
            <svg class="cs-header-nav-route-symbol" xmlns="http://www.w3.org/2000/svg" width="19.385" height="18" viewBox="0 0 19.385 18">
              <g transform="translate(-1 -2)"><path d="M4.965,2A3.991,3.991,0,0,0,1,6V17.231h9.692V20h1.385V17.231h8.308V6A3.988,3.988,0,0,0,16.42,2Zm0,1.385h.379A2.583,2.583,0,0,1,7.923,6v9.849H2.385V5.992A2.589,2.589,0,0,1,4.965,3.385Zm3.348,0H16.42A2.587,2.587,0,0,1,19,6v9.849H9.308V6A3.974,3.974,0,0,0,8.313,3.385Zm2.38,2.769V7.538h5.538V8.923h1.385V6.154ZM3.769,7.538V8.923H6.538V7.538Z"/></g>
            </svg>

            <span>Fale conosco</span>
          </h2>
          <p>Estamos sempre à disposição para ouvir você. Entre em contato conosco por meio de uma mensagem.</p>

          <router-link :to="{name: 'Contact'}">Mande uma mensagem</router-link>
        </div>
      </cs-badge>
    </cs-layout>
  </div>
</template>

<script>
import CsLayout from '../components/CsLayout';
import CsBadge from '../components/CsBadge';

export default {
  components: {
    CsLayout,
    CsBadge
  },
}
</script>