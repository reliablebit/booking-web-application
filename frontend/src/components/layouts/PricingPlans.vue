<template>
  <section id="pricing" class="pricing-section q-pa-xl">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center section-header q-mb-xl">
        <div class="text-overline text-primary">PRICING PLANS</div>
        <div class="text-h2 text-weight-bold text-dark q-mt-md q-mb-lg">Simple, Transparent Pricing</div>
        <p class="text-h6 text-grey-7 section-subtitle">Choose the perfect plan for your business needs. No hidden fees, no surprises.</p>

        <!-- Billing Toggle -->
        <div class="billing-toggle q-mt-lg">
          <div class="row justify-center items-center">
            <span class="text-body1 text-grey-7">Monthly</span>
            <q-toggle
              v-model="annualBilling"
              color="primary"
              class="q-mx-md"
            />
            <span class="text-body1 text-grey-7">
              Annual
              <q-badge color="positive" class="q-ml-xs">Save 20%</q-badge>
            </span>
          </div>
        </div>
      </div>

      <!-- Pricing Cards -->
      <div class="pricing-cards">
        <div class="row justify-center items-stretch q-col-gutter-xl">
          <div
            class="col-xl-4 col-md-6 col-sm-12"
            v-for="(plan, index) in computedPlans"
            :key="index"
            :class="{'popular-column': plan.popular}"
          >
            <q-card
              flat
              bordered
              :class="['pricing-card', {'popular-plan': plan.popular}]"
              data-aos="fade-up"
              :data-aos-delay="index * 100"
            >
              <!-- Popular Badge -->
              <div v-if="plan.popular" class="popular-badge">
                <q-icon name="star" class="q-mr-xs" />
                Most Popular
              </div>

              <q-card-section class="text-center card-header">
                <div class="plan-name text-h5 text-weight-bold text-dark">{{ plan.name }}</div>
                <div class="plan-price q-my-lg">
                  <div class="text-h1 text-weight-bold text-primary">
                    ${{ plan.price }}
                    <span class="text-h6 text-grey-7">/month</span>
                  </div>
                  <div v-if="annualBilling" class="text-caption text-positive">
                    billed annually (${{ Math.floor(plan.price * 12 * 0.8) }})
                  </div>
                </div>
                <p class="plan-description text-grey-7">{{ plan.description }}</p>
              </q-card-section>

              <q-separator />

              <q-card-section class="features-list">
                <div
                  v-for="(feature, fIndex) in plan.features"
                  :key="fIndex"
                  class="feature-item row items-center q-mb-md"
                >
                  <q-icon name="check_circle" color="positive" size="20px" class="q-mr-sm" />
                  <span class="text-body2">{{ feature }}</span>
                </div>
              </q-card-section>

              <q-card-section class="text-center card-footer">
                <q-btn
                  :color="plan.popular ? 'primary' : 'secondary'"
                  :unelevated="plan.popular"
                  :outline="!plan.popular"
                  size="lg"
                  :label="plan.buttonText"
                  class="action-btn full-width"
                  :class="{'popular-btn': plan.popular}"
                />
                <div v-if="plan.popular" class="text-caption text-grey-6 q-mt-sm">
                  🎉 Join 2,500+ growing businesses
                </div>
              </q-card-section>
            </q-card>
          </div>
        </div>
      </div>

      <!-- FAQ Section -->
      <div class="faq-section q-mt-xl q-pt-xl">
        <div class="text-center q-mb-lg">
          <div class="text-h4 text-weight-bold text-dark">Frequently Asked Questions</div>
        </div>
        <div class="row justify-center">
          <div class="col-md-8">
            <q-list bordered class="rounded-borders">
              <q-expansion-item
                v-for="(faq, index) in faqs"
                :key="index"
                :label="faq.question"
                class="faq-item"
              >
                <q-card>
                  <q-card-section>
                    {{ faq.answer }}
                  </q-card-section>
                </q-card>
              </q-expansion-item>
            </q-list>
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
  name: 'PricingPlans',
  data() {
    return {
      annualBilling: false,
      plans: [
        {
          name: 'Starter',
          price: '29',
          description: 'Perfect for small businesses and startups',
          popular: false,
          buttonText: 'Get Started',
          features: [
            'Up to 100 bookings/month',
            'Basic seat management',
            'Email support',
            'Standard analytics',
            '1 admin user',
            'Basic reporting'
          ]
        },
        {
          name: 'Professional',
          price: '79',
          description: 'Ideal for growing businesses',
          popular: true,
          buttonText: 'Start Free Trial',
          features: [
            'Unlimited bookings',
            'Advanced seat management',
            'Priority support',
            'Advanced analytics',
            'Custom branding',
            'Payment processing',
            '5 admin users',
            'API access'
          ]
        },
        {
          name: 'Enterprise',
          price: '199',
          description: 'For large organizations',
          popular: false,
          buttonText: 'Contact Sales',
          features: [
            'Unlimited everything',
            'Dedicated account manager',
            '24/7 phone support',
            'Custom integrations',
            'Full API access',
            'White-label solution',
            'Unlimited admin users',
            'SLA guarantee'
          ]
        }
      ],
      faqs: [
        {
          question: 'Can I change plans anytime?',
          answer: 'Yes, you can upgrade or downgrade your plan at any time. Changes take effect immediately.'
        },
        {
          question: 'Is there a setup fee?',
          answer: 'No, there are no setup fees for any of our plans. You only pay the monthly subscription fee.'
        },
        {
          question: 'What payment methods do you accept?',
          answer: 'We accept all major credit cards, PayPal, and bank transfers for annual plans.'
        },
        {
          question: 'Do you offer discounts for non-profits?',
          answer: 'Yes, we offer special pricing for non-profit organizations. Contact our sales team for more information.'
        }
      ]
    }
  },
  computed: {
    computedPlans() {
      return this.plans.map(plan => ({
        ...plan,
        price: this.annualBilling ? Math.floor(plan.price * 0.8).toString() : plan.price
      }))
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
.pricing-section {
  background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
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

.billing-toggle {
  background: white;
  padding: 16px 24px;
  border-radius: 12px;
  display: inline-block;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.pricing-cards {
  position: relative;
  z-index: 2;
}

.popular-column {
  position: relative;
  z-index: 3;
}

.pricing-card {
  border-radius: 20px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  background: white;
  height: 100%;
  position: relative;
  overflow: hidden;
  border: 2px solid transparent;
}

.pricing-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.popular-plan {
  border-color: var(--q-primary);
  transform: scale(1.02);
}

.popular-plan:hover {
  transform: scale(1.02) translateY(-8px);
}

.popular-badge {
  position: absolute;
  top: 16px;
  right: 16px;
  background: linear-gradient(135deg, var(--q-primary) 0%, var(--q-secondary) 100%);
  color: white;
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  display: flex;
  align-items: center;
  z-index: 2;
}

.card-header {
  padding: 40px 32px 32px;
}

.plan-name {
  font-size: 1.5rem;
}

.plan-price {
  line-height: 1;
}

.plan-price .text-h1 {
  font-size: 4rem;
  line-height: 1.1;
}

.plan-description {
  font-size: 1.1rem;
  line-height: 1.5;
}

.features-list {
  padding: 32px;
}

.feature-item {
  padding: 8px 0;
}

.card-footer {
  padding: 32px;
}

.action-btn {
  border-radius: 12px;
  font-weight: 600;
  text-transform: none;
  height: 48px;
  font-size: 1.1rem;
}

.popular-btn {
  background: linear-gradient(135deg, var(--q-primary) 0%, var(--q-secondary) 100%);
  color: white;
}

.faq-section {
  border-top: 1px solid #e2e8f0;
}

.faq-item {
  border-radius: 12px;
  margin-bottom: 8px;
  overflow: hidden;
}

.faq-item :deep(.q-item) {
  font-weight: 600;
  padding: 20px;
}

/* Responsive Design */
@media (max-width: 1023px) {
  .pricing-section {
    padding: 60px 24px;
  }

  .plan-price .text-h1 {
    font-size: 3rem;
  }
}

@media (max-width: 599px) {
  .pricing-section {
    padding: 40px 16px;
  }

  .text-h2 {
    font-size: 2rem;
  }

  .plan-price .text-h1 {
    font-size: 2.5rem;
  }

  .card-header,
  .features-list,
  .card-footer {
    padding: 24px 20px;
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
