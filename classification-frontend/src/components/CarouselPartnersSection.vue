<template>
  <q-carousel
    swipeable
    animated
    arrows
    v-model="slide"
    infinite
    control-type="regular"
    control-color="grey"
    control-text-color="blue"
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
            src="/equest.png"
            v-lazy-image
            v-lazy-image-loaded
            class="sponsor-logo"
          />
        </div>
      </div>
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/recruitly.png"
            v-lazy-image
            v-lazy-image-loaded
            class="sponsor-logo"
          />
        </div>
      </div>
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/lever.png"
            v-lazy-image
            v-lazy-image-loaded
            class="sponsor-logo"
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
            src="/broadbean.svg"
            v-lazy-image
            v-lazy-image-loaded
            class="sponsor-logo"
          />
        </div>
      </div>
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/hrlink.svg"
            v-lazy-image
            v-lazy-image-loaded
            class="sponsor-logo"
          />
        </div>
      </div>
      <div class="row justify-around full-width q-px-sm text-center">
        <div class="col">
          <img
            src="/logicmelon.svg"
            v-lazy-image
            v-lazy-image-loaded
            class="sponsor-logo"
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
</style>
