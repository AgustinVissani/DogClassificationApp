<template>
  <div class="background-page q-layout-transition">
    <div class="page-container layout-padding">
      <div class="row banner-container">
        <div class="col-md-5 col-xs-12">
          <h1 class="title">
            Find the perfect employee in our database of more than 25,000 new
            multilingual candidates each month.
          </h1>
          <q-btn
            inline
            relative-position
            non-selectable
            q-focusable
            q-hoverable
            tabindex="0"
            type="button"
            class="post-a-job"
            to="/companies/registry"
          >
            <q-btn-inner> Post a job </q-btn-inner>
          </q-btn>
        </div>
        <div class="col-md-5 offset-md-2 col-xs-12">
          <div class="item-list">
            <q-icon class="fa fa-users white-icon"></q-icon>
            <span>
              <strong>+ 2,500</strong><br />
              companies posting in more than 48 countries
            </span>
          </div>
          <div class="item-list">
            <q-icon name="fa fa-clock" class="white-icon"></q-icon>
            <span>
              <strong>Post with ease</strong><br />
              Publish a job advert in just 2 minutes
            </span>
          </div>
          <div class="item-list">
            <q-icon name="fa fa-file" class="white-icon"></q-icon>
            <span>
              <strong>+ 50,000</strong><br />
              candidate applications per month
            </span>
          </div>
        </div>
      </div>
      <div class="row q-pb-lg">
        <div class="col-12">
          <CarouselHeroSection />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CarouselHeroSection from "./CarouselHeroSection.vue";

export default {
  components: {
    CarouselHeroSection,
  },
};

</script>

<style scoped>
.background-page .banner-container .title {
  text-align: left;
  font-family: Lato, sans-serif;
  font-size: 22px;
  font-weight: 500;
  color: #fff;
  letter-spacing: 1.96px;
  margin-top: 50px;
}
.background-page .banner-container .post-a-job {
  background-color: white;
  color: #0c3866;
  font-weight: 700;
  font-size: 16px;
  text-transform: uppercase;
  padding: 15px 75px;
  margin-top: 30px;
  border-radius: 30px;
}

.item-list {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.white-icon {
  color: white;
  font-size: 50px;
  display: table-cell;
  width: 65px;
  text-align: center;
}

.item-list q-icon {
  margin-right: 10px;
}

.item-list span {
  color: #fff;
  font-weight: bold;
}
.background-page .banner-container {
  padding-top: 20px;
  padding-bottom: 80px;
}

.background-page .banner-container .item-list span {
  display: table-cell;
  padding-left: 30px;
  color: #fff;
  vertical-align: middle;
}

.background-page .banner-container .item-list span strong {
  font-size: 24px;
}

h1 {
  display: block;
  font-size: 2em;
  margin-block-start: 0.67em;
  margin-block-end: 0.67em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  font-weight: bold;
}

@media (max-width: 575.98px) {
  .background-page .banner-container {
    padding: 0 20px;
  }
}
</style>
