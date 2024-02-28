<template>
  <HeroSection />
  <HiringSection />
  <FindmoreSection />
  <TellusaboutSection />
  <PartnersSection />
  <GoalSection />
  <FooterSection/>
</template>

<script>
import HeroSection from "components/HeroSection.vue";
import HiringSection from "components/HiringSection.vue";
import FindmoreSection from "components/FindmoreSection.vue";
import TellusaboutSection from "components/TellusaboutSection.vue";
import PartnersSection from "components/PartnersSection.vue";
import GoalSection from "components/GoalSection.vue";
import FooterSection from "components/FooterSection.vue";


export default {
  components: {
    HeroSection,
    HiringSection,
    FindmoreSection,
    TellusaboutSection,
    PartnersSection,
    GoalSection,
    FooterSection,
  },
};
</script>
