<template>
  <div class="no-padding-top q-layout-transition bg-blue">
    <div class="row find-more">
      <div class="col-12 text-center">
        <span>Find more about our basic and personalized hiring solutions</span>
        <a href="/companies/our-services" class="">
          <button
            tabindex="0"
            type="button"
            class="q-btn inline relative-position q-btn-item non-selectable learn-more q-btn-rectangle q-focusable q-hoverable"
          >
            <div class="q-focus-helper"></div>
            <div
              class="q-btn-inner row col items-center q-popup--skip justify-center"
            >
              Learn more
            </div>
          </button>
        </a>
      </div>
    </div>
  </div>
</template>

<style>
.find-more {
  padding: 50px 0;
}
.find-more div span {
  color: #fff;
  font-size: 22px;
}
.find-more div button.learn-more {
  background-color: #fff;
  color: #0c3866;
  font-weight: 700;
  font-size: 16px;
  text-transform: uppercase;
  padding: 5px 60px;
  margin-left: 30px;
  border-radius: 30px;
}
</style>
