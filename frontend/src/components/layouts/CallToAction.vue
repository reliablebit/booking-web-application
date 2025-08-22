<template>
  <section class="q-pa-xl bg-primary text-white text-center">
    <div class="row justify-center">
      <div class="col-md-8 col-sm-12">
        <div class="text-h3 text-weight-bold q-mb-md">Ready to Transform Your Booking Process?</div>
        <p class="text-h6 q-mb-xl">Join thousands of businesses using BookingMaster to streamline their operations</p>

        <div class="q-gutter-md">
          <q-btn label="Get Started Now" color="white" text-color="primary" size="lg" to="/auth/register" />
          <q-btn label="Schedule a Demo" color="primary" outline size="lg" />
        </div>

        <div class="row q-mt-xl justify-center">
          <div class="col-auto q-px-lg" v-for="(stat, index) in stats" :key="index">
            <div class="text-h4 text-weight-bold">{{ stat.value }}</div>
            <div class="text-caption">{{ stat.label }}</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'CallToAction',
  data() {
    return {
      stats: [
        { value: '99.9%', label: 'Uptime' },
        { value: '24/7', label: 'Support' },
        { value: '5,000+', label: 'Active Merchants' },
        { value: '1M+', label: 'Bookings Processed' }
      ]
    }
  }
}
</script>
