<template>
  <header class="cs-component-header">
    <div class="cs-header-i18n-bar">
      <cs-layout></cs-layout>
    </div>

    <div class="cs-header-navigation-wrapper">
      <cs-layout>
        <div class="cs-header-brand-area">
          <!-- SVG brand -->

          <span class="cs-header-brand-slogan" v-html="slogan" />
        </div>

        <nav class="cs-header-navigation-area">
          <router-link class="cs-header-nav-link" to="Home">
            <div class="cs-header-nav-link-contents">
              <svg xmlns="http://www.w3.org/2000/svg" width="20.839" height="18" viewBox="0 0 20.839 18">
                <g transform="translate(-0.66 -1.32)"><path d="M11.08,1.32.66,10.991l.965,1.043.937-.871V19.32h7.1v-7.1H12.5v7.1h7.1V11.163l.937.871.965-1.043Zm0,1.93,7.1,6.6V17.9H13.919V10.8H8.241v7.1H3.982V9.849Z" fill="rgba(0,0,0,0.54)"/></g>
              </svg>

              <span class="cs-header-nav-route-title">Página inicial</span>
            </div>
          </router-link>

          <router-link class="cs-header-nav-link" to="Company">
            <div class="cs-header-nav-link-contents">
              <svg xmlns="http://www.w3.org/2000/svg" width="28.595" height="19.003" viewBox="0 0 28.595 19.003">
                <path d="M27.378,6.256,22.718,4.5,16.449,2.135c-.752-.284-1.5-.571-2.258-.848a1.8,1.8,0,0,0-.386-.064c-.309-.042-.617-.082-.925-.122l-.8-.1-.918-.12-.79-.1L9.451.651l-.8-.1L7.742.427l-.8-.1L6.133.217l-.79-.1L4.56.012A.111.111,0,0,1,4.531,0H4.492a.63.63,0,0,0-.053.069L.849,6.4.024,7.852A.344.344,0,0,1,0,7.886V7.9a.072.072,0,0,0,.07.042H2.042v8.051l10.71,2,.025,0,12.834-.819V6.233l.2.015.8.067.928.074A.337.337,0,0,1,27.6,6.4v-.07C27.523,6.3,27.45,6.283,27.378,6.256ZM12.587,17.547l-10.135-1.9V7.633L2.534,7.5,5.206,3.216Q5.836,2.207,6.465,1.2c.024-.039.042-.041.074-.024q3.023,1.646,6.046,3.286Zm.685-12.717c.277.151.553.309.833.448a.736.736,0,0,0,.273.05c.392.034.784.065,1.176.1l.962.075,1.132.093q.391.032.783.058l1.132.092c.254.021.509.04.763.058l1.156.094.753.058L23.4,6.05l.768.058,1.152.094h-.117V16.8L13,17.576V4.682Z" transform="translate(0.5 0.5)" fill="rgba(0,0,0,0.54)" stroke="#717171" stroke-width="1"/>
              </svg>

              <span class="cs-header-nav-route-title">Empresa</span>
            </div>
          </router-link>

          <router-link class="cs-header-nav-link" to="Products">
            <div class="cs-header-nav-link-contents">
              <svg xmlns="http://www.w3.org/2000/svg" width="26.27" height="18" viewBox="0 0 26.27 18">
                <path d="M13.093,3.038a.821.821,0,0,0-.516.218L.263,14.687a.821.821,0,0,0,.558,1.424H3.284v4.925H4.926V16.111H21.344v4.925h1.642V16.111h2.463a.821.821,0,0,0,.558-1.424l-4.662-4.329V4.618H19.7V8.835l-6.009-5.58a.821.821,0,0,0-.6-.218Zm.042,1.94,10.223,9.492H2.912Z" transform="translate(0 -3.036)" fill="rgba(0,0,0,0.54)"/>
              </svg>

              <span class="cs-header-nav-route-title">Produtos</span>
            </div>
          </router-link>
        </nav>
      </cs-layout>
    </div>
  </header>
</template>

<script>
// import HomeSvg from '../../assets/vectors/home.svg';
import CsLayout from '../components/CsLayout';

export default {
  name: 'CsHeader',
  components: {
    CsLayout,
    // HomeSvg
  },
  props: {
    useI18n: true,
    useSearch: true,
    slogan: "É Casalit? Tá em casa!"
  }
}
</script>