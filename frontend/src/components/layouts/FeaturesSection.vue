<template>
  <section id="features" class="features-section q-pa-xl">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center section-header q-mb-xl">
        <div class="text-overline text-primary">CORE FEATURES</div>
        <div class="text-h2 text-weight-bold text-dark q-mt-md q-mb-lg">Powerful Booking Management Tools</div>
        <p class="text-h6 text-grey-7 section-subtitle">Everything you need to streamline reservations, manage availability, and grow your business</p>
      </div>

      <!-- Features Grid -->
      <div class="features-grid">
        <div class="row q-col-gutter-xl">
          <div
            class="col-md-4 col-sm-6 col-xs-12"
            v-for="(feature, index) in features"
            :key="index"
            data-aos="fade-up"
            :data-aos-delay="index * 100"
          >
            <q-card
              flat
              bordered
              class="feature-card text-center"
            >
              <div class="feature-icon-wrapper">
                <q-icon
                  :name="feature.icon"
                  size="xl"
                  :color="feature.color"
                  class="feature-icon"
                />
              </div>

              <q-card-section class="q-pt-none">
                <div class="text-h5 text-weight-bold text-dark q-mt-md q-mb-sm">{{ feature.title }}</div>
                <p class="feature-description text-grey-7">{{ feature.description }}</p>
              </q-card-section>

              <q-card-actions class="justify-center q-pb-lg">
                <q-btn
                  unelevated
                  :color="feature.color"
                  label="Learn More"
                  size="sm"
                  class="feature-btn"
                />
              </q-card-actions>
            </q-card>
          </div>
        </div>
      </div>

      <!-- Stats Section -->
      <div class="stats-section q-mt-xl q-pt-xl">
        <div class="row justify-center items-center text-center">
          <div class="col-md-3 col-sm-6 col-xs-12 q-pa-md" v-for="(stat, index) in stats" :key="'stat-'+index">
            <div class="stat-number text-h2 text-weight-bold text-primary">{{ stat.value }}</div>
            <div class="stat-label text-h6 text-grey-7 q-mt-sm">{{ stat.label }}</div>
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
  name: 'FeaturesSection',
  data() {
    return {
      features: [
        {
          icon: 'event_seat',
          color: 'primary',
          title: 'Smart Seat Management',
          description: 'Interactive seat maps with drag-and-drop editing, real-time availability tracking, and optimized seating arrangements.'
        },
        {
          icon: 'payments',
          color: 'secondary',
          title: 'Secure Payment Processing',
          description: 'Multiple payment gateways, PCI-compliant encryption, fraud detection, and automated refund processing.'
        },
        {
          icon: 'analytics',
          color: 'accent',
          title: 'Advanced Analytics Suite',
          description: 'Comprehensive dashboards with real-time insights, performance metrics, and predictive analytics.'
        },
        {
          icon: 'calendar_today',
          color: 'positive',
          title: 'Unified Booking Calendar',
          description: 'Visual calendar interface with drag-and-drop scheduling, conflict detection, and multi-view options.'
        },
        {
          icon: 'notifications',
          color: 'orange',
          title: 'Automated Notifications',
          description: 'Customizable alerts, SMS/email reminders, and intelligent follow-up system for better engagement.'
        },
        {
          icon: 'admin_panel_settings',
          color: 'purple',
          title: 'Role-Based Access Control',
          description: 'Granular permissions, multi-level administration, and audit trails for complete security.'
        }
      ],
      stats: [
        { value: '99.9%', label: 'System Uptime' },
        { value: '5,000+', label: 'Active Merchants' },
        { value: '1M+', label: 'Monthly Bookings' },
        { value: '24/7', label: 'Support Available' }
      ]
    }
  },
  mounted() {
    // Initialize animations if AOS is available
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
.features-section {
  background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
  position: relative;
  overflow: hidden;
}

.features-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
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

.features-grid {
  position: relative;
  z-index: 2;
}

.feature-card {
  border-radius: 16px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  background: white;
  height: 100%;
  position: relative;
  overflow: hidden;
}

.feature-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--q-primary), var(--q-secondary));
  opacity: 0;
  transition: opacity 0.3s ease;
}

.feature-card:hover::before {
  opacity: 1;
}

.feature-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.feature-icon-wrapper {
  padding: 40px 0 20px;
  position: relative;
}

.feature-icon {
  background: linear-gradient(135deg, var(--q-primary) 0%, var(--q-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  font-size: 64px;
  padding: 16px;
  border-radius: 50%;
  position: relative;
  z-index: 1;
}

.feature-icon-wrapper::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, rgba(25, 118, 210, 0.1) 0%, rgba(100, 181, 246, 0.1) 100%);
  border-radius: 50%;
  z-index: 0;
}

.feature-description {
  line-height: 1.6;
  font-size: 1rem;
  min-height: 80px;
}

.feature-btn {
  border-radius: 20px;
  font-weight: 500;
  text-transform: none;
  padding: 8px 24px;
}

.stats-section {
  border-top: 1px solid #e2e8f0;
  position: relative;
}

.stats-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 4px;
  background: linear-gradient(90deg, var(--q-primary), var(--q-secondary));
  border-radius: 2px;
}

.stat-number {
  font-size: 3.5rem;
  line-height: 1;
  margin-bottom: 8px;
}

.stat-label {
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* Responsive Design */
@media (max-width: 1023px) {
  .features-section {
    padding: 60px 24px;
  }

  .text-h2 {
    font-size: 2.5rem;
  }

  .stat-number {
    font-size: 2.5rem;
  }
}

@media (max-width: 599px) {
  .features-section {
    padding: 40px 16px;
  }

  .text-h2 {
    font-size: 2rem;
  }

  .feature-icon {
    font-size: 48px;
  }

  .feature-icon-wrapper::after {
    width: 60px;
    height: 60px;
  }

  .stat-number {
    font-size: 2rem;
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
</style>
