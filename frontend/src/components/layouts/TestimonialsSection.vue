<template>
  <section id="testimonials" class="testimonials-section q-pa-xl">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center section-header q-mb-xl">
        <div class="text-overline text-primary">TESTIMONIALS</div>
        <div class="text-h2 text-weight-bold text-dark q-mt-md q-mb-lg">Trusted by Thousands of Businesses</div>
        <p class="text-h6 text-grey-7 section-subtitle">See what our customers are saying about their experience with BookingMaster</p>
      </div>

      <!-- Testimonials Grid -->
      <div class="testimonials-grid q-mb-xl">
        <div class="row q-col-gutter-xl">
          <div
            class="col-md-4 col-sm-12"
            v-for="(testimonial, index) in testimonials"
            :key="'grid-'+index"
            data-aos="fade-up"
            :data-aos-delay="index * 100"
          >
            <q-card flat bordered class="testimonial-card">
              <q-card-section>
                <div class="rating-section">
                  <q-rating
                    v-model="testimonial.rating"
                    size="1.2em"
                    color="orange"
                    readonly
                    class="q-mb-md"
                  />
                </div>
                <p class="testimonial-text text-body1 text-italic">"{{ testimonial.text }}"</p>

                <div class="author-section q-mt-lg">
                  <div class="row items-center">
                    <q-avatar size="60px" class="q-mr-md">
                      <img :src="testimonial.avatar">
                    </q-avatar>
                    <div>
                      <div class="text-h6 text-weight-bold text-dark">{{ testimonial.name }}</div>
                      <div class="text-caption text-grey-7">{{ testimonial.position }}, {{ testimonial.company }}</div>
                    </div>
                  </div>
                </div>
              </q-card-section>
            </q-card>
          </div>
        </div>
      </div>

      <!-- Stats Section -->
      <div class="stats-section text-center">
        <div class="row justify-center items-center">
          <div class="col-md-3 col-sm-6 col-xs-12 q-pa-md" v-for="(stat, index) in stats" :key="'stat-'+index">
            <div class="stat-number text-h2 text-weight-bold text-primary">{{ stat.value }}</div>
            <div class="stat-label text-h6 text-grey-7 q-mt-sm">{{ stat.label }}</div>
          </div>
        </div>
      </div>

      <!-- Logo Cloud -->
      <div class="logo-cloud q-mt-xl q-pt-xl">
        <div class="text-center q-mb-lg">
          <div class="text-h5 text-weight-bold text-dark">Trusted by industry leaders</div>
        </div>
        <div class="row justify-center items-center">
          <div
            class="col-auto q-px-xl q-py-md"
            v-for="(logo, index) in logos"
            :key="'logo-'+index"
          >
            <q-img
              :src="logo.src"
              :alt="logo.alt"
              width="120px"
              class="grayscale-logo"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import AOS from "aos";
import "aos/dist/aos.css";

export default {
  name: 'TestimonialsSection',
  data() {
    return {
      slide: 0,
      testimonials: [
        {
          name: 'Sarah Johnson',
          position: 'CEO',
          company: 'EventSpace Inc.',
          text: 'BookingMaster has completely transformed how we manage our venue bookings. The visual seat management feature alone has saved us over 10 hours per week in administrative work.',
          rating: 5,
          avatar: 'https://cdn.quasar.dev/img/avatar1.jpg'
        },
        {
          name: 'Michael Chen',
          position: 'Operations Director',
          company: 'Grand Theater',
          text: 'The analytics dashboard provides insights we never had access to before. We\'ve increased our occupancy rate by 22% and boosted revenue by 18% in just three months.',
          rating: 5,
          avatar: 'https://cdn.quasar.dev/img/avatar2.jpg'
        },
        {
          name: 'Jessica Williams',
          position: 'Business Owner',
          company: 'Cafe Luna',
          text: 'As a small business, the starter plan gives us everything we need at an affordable price. The customer support team is exceptional - always responsive and helpful.',
          rating: 4,
          avatar: 'https://cdn.quasar.dev/img/avatar4.jpg'
        }
      ],
      stats: [
        { value: '4.9/5', label: 'Average Rating' },
        { value: '2,500+', label: 'Happy Customers' },
        { value: '98%', label: 'Retention Rate' },
        { value: '24/7', label: 'Support Available' }
      ],
      logos: [
        { src: 'https://cdn.quasar.dev/logo-v2/svg/logo.svg', alt: 'Company 1' },
        { src: 'https://cdn.quasar.dev/logo-v2/svg/logo.svg', alt: 'Company 2' },
        { src: 'https://cdn.quasar.dev/logo-v2/svg/logo.svg', alt: 'Company 3' },
        { src: 'https://cdn.quasar.dev/logo-v2/svg/logo.svg', alt: 'Company 4' },
        { src: 'https://cdn.quasar.dev/logo-v2/svg/logo.svg', alt: 'Company 5' }
      ]
    }
  },
  mounted() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 800,
        once: true
      });
    }
  }
}
</script>

<style scoped>
.testimonials-section {
  background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
  position: relative;
  overflow: hidden;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.section-header {
  position: relative;
  z-index: 2;
}

.section-subtitle {
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.6;
}

.testimonials-grid {
  position: relative;
  z-index: 2;
}

.testimonial-card {
  border-radius: 16px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  background: white;
  height: 100%;
  position: relative;
  overflow: hidden;
  border: 1px solid #e2e8f0;
}

.testimonial-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.testimonial-card::before {
  content: '"';
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 80px;
  color: #f1f5f9;
  font-family: Georgia, serif;
  line-height: 1;
  z-index: 0;
}

.rating-section {
  position: relative;
  z-index: 2;
}

.testimonial-text {
  line-height: 1.7;
  position: relative;
  z-index: 2;
  margin-bottom: 0;
  min-height: 120px;
}

.author-section {
  position: relative;
  z-index: 2;
  border-top: 1px solid #f1f5f9;
  padding-top: 20px;
}

.stats-section {
  background: white;
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  margin: 0 auto;
  max-width: 1000px;
}

.stat-number {
  font-size: 3rem;
  line-height: 1;
  margin-bottom: 8px;
}

.stat-label {
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.logo-cloud {
  border-top: 1px solid #e2e8f0;
  position: relative;
}

.logo-cloud::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 3px;
  background: linear-gradient(90deg, var(--q-primary), var(--q-secondary));
  border-radius: 2px;
}

.grayscale-logo {
  filter: grayscale(100%);
  opacity: 0.6;
  transition: all 0.3s ease;
}

.grayscale-logo:hover {
  filter: grayscale(0%);
  opacity: 1;
}

/* Responsive Design */
@media (max-width: 1023px) {
  .testimonials-section {
    padding: 60px 24px;
  }

  .text-h2 {
    font-size: 2.5rem;
  }

  .stat-number {
    font-size: 2.5rem;
  }

  .testimonial-text {
    min-height: 150px;
  }
}

@media (max-width: 899px) {
  .testimonials-grid .col-md-4 {
    margin-bottom: 30px;
  }

  .testimonial-text {
    min-height: auto;
  }
}

@media (max-width: 599px) {
  .testimonials-section {
    padding: 40px 16px;
  }

  .text-h2 {
    font-size: 2rem;
  }

  .stats-section {
    padding: 30px 20px;
  }

  .stat-number {
    font-size: 2rem;
  }

  .logo-cloud .col-auto {
    width: 50%;
    text-align: center;
  }
}

/* Animation classes */
[data-aos] {
  opacity: 0;
  transition-property: transform, opacity;
}

[data-aos].aos-animate {
  opacity: 1;
}

/* Custom carousel alternative */
.testimonial-nav {
  display: flex;
  justify-content: center;
  margin-top: 40px;
  gap: 12px;
}

.nav-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #e2e8f0;
  cursor: pointer;
  transition: all 0.3s ease;
}

.nav-dot.active {
  background: var(--q-primary);
  transform: scale(1.2);
}
</style>
