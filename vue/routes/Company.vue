<template>
  <div class="cs-page-company">
    <div class="cs-page-text-container">
      <div class="cs-page-text-content">
        <h1>Sobre a Casalit</h1>

        <div class="cs-page-text-layout">
          <p>A Casalit é uma empresa brasileira especializada na fabricação de telhas e artefatos de fibrocimento. Com mais de 38 anos de experiência sua trajetória se iniciou em 1982 na cidade de Duque de Caxias, estado do Rio de Janeiro. De lá para cá, a Casalit vem buscando atender da melhor forma seus clientes, levando o conforto e praticidade aos lares das famílias brasileiras.</p>

          <p>Possui um parque industrial com ótima estrutura, sempre buscando aperfeiçoamento e modernização para fabricação de um produto de alta qualidade.</p>

          <p>A Casalit atende todo o estado do Rio de Janeiro, Espírito Santo, Minas Gerais, São Paulo e Bahia. Está sempre comprometida a atender a satisfação de seus clientes, buscando cada vez mais aprimorar seus produtos e serviços. Levando no nome sua missão, fazer parte das construções de casas, é gratificante para Casalit saber que faz e continuará fazendo parte de muitos lares.</p>
        </div>
      </div>

      <div class="cs-page-casalit-image"></div>
    </div>

    <cs-layout use-margin>
      <cs-badge range="half" index="1">
        <div class="cs-badge-contents-text">
          <h2>Missão</h2>
          <p>Produzir e comercializar telhas e artefatos de fibrocimento de altíssima qualidade, que fazem parte de construções não só de casas, mas de lares, levando conforto e proteção, com responsabilidade social e respeito ao meio ambiente.</p>
        </div>
      </cs-badge>

      <cs-badge range="half" index="7" class="expanded">
        <div class="cs-badge-contents-text">
          <h2>Valores</h2>
          <ul>
            <li>Ética e transparência</li>
            <li>Respeito aos clientes, colaboradores e fornecedores</li>
            <li>Foco em resultados</li>
            <li>Respeito ao meio ambiente</li>
            <li>Qualidade</li>
          </ul>
        </div>
      </cs-badge>

      <cs-badge range="half" index="1">
        <div class="cs-badge-contents-text">
          <h2>Visão</h2>
          <p>Ser reconhecida como uma empresa de excelência no mercado brasileiro, por fabricar e comercializar telhas e artefatos de fibrocimento de alto padrão de qualidade.</p>
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