<template>
  <div>
    <hero-section />
    <features-section />
    <pricing-plans />
    <testimonials-section />
    <call-to-action />
  </div>
</template>

<script>
import HeroSection from "components/layouts/HeroSection.vue";
import FeaturesSection from "components/layouts/FeaturesSection.vue";
import TestimonialsSection from "components/layouts/TestimonialsSection.vue";
import PricingPlans from "components/layouts/PricingPlans.vue";
import CallToAction from "components/layouts/CallToAction.vue";

export default {
  name: "LandingPage",
  components: {
    HeroSection,
    FeaturesSection,
    TestimonialsSection,
    PricingPlans,
    CallToAction
  }
};
</script>

