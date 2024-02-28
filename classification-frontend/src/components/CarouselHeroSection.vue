<template>
  <q-carousel
    class="background: transparent"
    swipeable
    animated
    arrows
    v-model="slide"
    infinite
    control-type="regular"
    control-color="transparent"
    control-text-color="white"
    q-mt-xl
  >
    <q-carousel-slide
      v-lazy-image
      v-lazy-image-loaded
      :name="0"
      class="relative-position scroll flex-center"
    >
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/logo-agoda-607-4993.svg"
            v-lazy-image
            v-lazy-image-loaded
            class="logo v-lazy-image v-lazy-image-loaded"
          />
        </div>
      </div>
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/logo-top-company-apple-609-1600.svg"
            v-lazy-image
            v-lazy-image-loaded
            class="logo v-lazy-image v-lazy-image-loaded"
          />
        </div>
      </div>
    </q-carousel-slide>
    <q-carousel-slide
      v-lazy-image
      v-lazy-image-loaded
      :name="1"
      class="relative-position scroll flex-center"
    >
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/logo-ttec-611-874.svg"
            v-lazy-image
            v-lazy-image-loaded
            class="logo v-lazy-image v-lazy-image-loaded"
          />
        </div>
      </div>
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/airproducts-logo-612.svg"
            v-lazy-image
            v-lazy-image-loaded
            class="logo v-lazy-image v-lazy-image-loaded"
          />
        </div>
      </div>
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/top-companies-posting-foundever-portugal-610-9042.svg"
            v-lazy-image
            v-lazy-image-loaded
            class="logo v-lazy-image v-lazy-image-loaded"
          />
        </div>
      </div>
    </q-carousel-slide>
  </q-carousel>
</template>

<script>
import { ref, onMounted } from "vue";

export default {
  setup() {
    const slide = ref(0);
    const interval = 3000;

    onMounted(() => {
      setInterval(() => {
        slide.value = (slide.value + 1) % 2;
      }, interval);
    });

    return {
      slide,
    };
  },
};
</script>

<style>
.q-carousel-slide {
  transition: transform 0.3s ease;
}

.q-carousel-inner {
  transform: translateX(-100%);
}
.background-page .logo {
    max-height: 80px;
    margin: 0 auto;
}

</style>
