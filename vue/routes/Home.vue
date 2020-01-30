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
          <div class="cs-carouse-content" :style="'background-image: url(' + require('../../assets/images/banner-slogan-1.png') + ')'" />
        </slide>

        <slide>
          <div class="cs-carouse-content" :style="'background-image: url(' + require('../../assets/images/banner-pecas-complementares-2.png') + ')'" />
        </slide>
      </carousel>
    </div>

    <div class="cs-home-badge"></div>
  </div>
</template>
