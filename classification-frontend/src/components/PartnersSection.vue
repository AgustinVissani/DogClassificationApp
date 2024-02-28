<template>
  <div class="no-padding-top bg-white">
    <div class="page-container layout-padding">
      <div id="partners" class="row partners">
        <div class="col-12" style="padding-top: 15px">
          <h2 class="title text-center">
            <strong>ATS Partners &amp; API Solutions</strong>
          </h2>
        </div>
      </div>
      <div class="row q-pb-lg">
        <div class="col-12">
          <CarouselPartnersSection />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CarouselPartnersSection from "./CarouselPartnersSection.vue";

export default {
  components: {
    CarouselPartnersSection,
  },
};
</script>

<style>
.partners .title {
  color: #0c3866;
  font-size: 22px;
}
</style>
