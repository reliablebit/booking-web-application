<template>
  <q-header elevated class="bg-white text-primary">
    <q-toolbar>
      <!-- Logo Section -->
      <q-toolbar-title class="row items-center">
        <!-- <q-avatar>
          <img src="https://cdn.quasar.dev/logo-v2/svg/logo.svg">
        </q-avatar> -->
        <span class="logo-text q-ml-sm">BookingMaster</span>
      </q-toolbar-title>

      <q-space />

      <!-- Desktop Navigation (visible on medium screens and up) -->
      <div class="desktop-nav q-gutter-sm row items-center no-wrap gt-sm">
        <q-btn flat round dense icon="notifications" color="primary" class="q-mr-sm">
          <q-badge color="red" rounded floating>3</q-badge>
        </q-btn>

        <q-btn flat label="Home" to="/" color="primary" />
        <q-btn flat label="Features" href="#features" color="primary" />
        <q-btn flat label="Pricing" href="#pricing" color="primary" />
        <q-btn flat label="Testimonials" href="#testimonials" color="primary" />

        <q-btn-dropdown flat label="Account" color="primary">
          <q-list>
            <q-item clickable v-close-popup to="/auth/login">
              <q-item-section>
                <q-item-label>Login</q-item-label>
              </q-item-section>
            </q-item>

            <q-item clickable v-close-popup to="/auth/register/user">
              <q-item-section>
                <q-item-label>Register as User</q-item-label>
              </q-item-section>
            </q-item>

            <q-item clickable v-close-popup to="/auth/register/merchant">
              <q-item-section>
                <q-item-label>Register as Merchant</q-item-label>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>
      </div>

      <!-- Mobile Hamburger Menu (visible on small screens) -->
      <q-btn
        flat
        round
        dense
        icon="menu"
        color="primary"
        class="lt-md"
        @click="toggleMobileMenu"
      />
    </q-toolbar>

    <!-- Mobile Navigation Drawer -->
    <q-drawer
      v-model="mobileMenuOpen"
      side="right"
      bordered
      :width="280"
      class="bg-white"
    >
      <q-scroll-area class="fit">
        <q-list padding class="menu-list">
          <!-- Notifications -->
          <q-item>
            <!-- <q-item-section avatar>
              <q-icon name="notifications" color="primary" />
              <q-badge color="red" floating rounded>3</q-badge>
            </q-item-section> -->
            <q-item-section>Notifications</q-item-section>
          </q-item>

          <q-separator />

          <!-- Navigation Links -->
          <q-item clickable v-close-popup to="/">
            <q-item-section avatar>
              <q-icon name="home" color="primary" />
            </q-item-section>
            <q-item-section>Home</q-item-section>
          </q-item>

          <q-item clickable v-close-popup href="#features">
            <q-item-section avatar>
              <q-icon name="featured_play_list" color="primary" />
            </q-item-section>
            <q-item-section>Features</q-item-section>
          </q-item>

          <q-item clickable v-close-popup href="#pricing">
            <q-item-section avatar>
              <q-icon name="attach_money" color="primary" />
            </q-item-section>
            <q-item-section>Pricing</q-item-section>
          </q-item>

          <q-item clickable v-close-popup href="#testimonials">
            <q-item-section avatar>
              <q-icon name="record_voice_over" color="primary" />
            </q-item-section>
            <q-item-section>Testimonials</q-item-section>
          </q-item>

          <q-separator />

          <!-- Account Section -->
          <q-item-label header class="text-primary">Account</q-item-label>

          <q-item clickable v-close-popup to="/auth/login">
            <q-item-section avatar>
              <q-icon name="login" color="primary" />
            </q-item-section>
            <q-item-section>Login</q-item-section>
          </q-item>

          <q-item clickable v-close-popup to="/auth/register/user">
            <q-item-section avatar>
              <q-icon name="person_add" color="primary" />
            </q-item-section>
            <q-item-section>Register as User</q-item-section>
          </q-item>

          <q-item clickable v-close-popup to="/auth/register/merchant">
            <q-item-section avatar>
              <q-icon name="store" color="primary" />
            </q-item-section>
            <q-item-section>Register as Merchant</q-item-section>
          </q-item>
        </q-list>
      </q-scroll-area>
    </q-drawer>
  </q-header>
</template>

<script>
export default {
  name: 'NavbarComponent',
  data() {
    return {
      mobileMenuOpen: false
    }
  },
  methods: {
    toggleMobileMenu() {
      this.mobileMenuOpen = !this.mobileMenuOpen
    }
  }
}
</script>

<style scoped>
.logo-text {
  font-weight: 600;
}

/* Add a subtle shadow for depth */
.q-header {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Style the dropdown menu */
.q-menu {
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

/* Add hover effects for buttons */
.q-btn::before {
  border-radius: 6px;
}

.q-btn:hover::before {
  background: rgba(25, 118, 210, 0.08);
}

/* Mobile menu styles */
.menu-list .q-item {
  border-radius: 8px;
  margin: 4px 8px;
}

.menu-list .q-item__section--avatar .q-icon {
  font-size: 20px;
}

/* Responsive adjustments */
@media (max-width: 767px) {
  .desktop-nav {
    display: none;
  }
}

@media (min-width: 768px) {
  .mobile-menu-btn {
    display: none;
  }
}
</style>
