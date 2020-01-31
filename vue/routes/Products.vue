<template>
  <div class="cs-page-products">
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
      <cs-badge range="half" index="1">
        <div class="cs-badge-contents-text">
          <h2>Telhas</h2>
          <p>Conheça nossas telhas de fibrocimento.</p>

          <router-link :to="{name: ''}">Ver telhas</router-link>
        </div>

        <div class="cs-badge-contents-thumbnail">
          <img :src="require('../../public/images/5e2efd25beecd639352958.png')" />
        </div>
      </cs-badge>

      <cs-badge range="half" index="7">
        <div class="cs-badge-contents-text">
          <h2>Peças complementares</h2>
          <p>Conheça nossas peças complementares.</p>

          <router-link :to="{name: ''}">Ver peças complementares</router-link>
        </div>

        <div class="cs-badge-contents-thumbnail">
          <img :src="require('../../public/images/5e2f27b21b778373021723.png')" />
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