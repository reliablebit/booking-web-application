<template>
  <q-layout view="hHh Lpr lFf">
    <!-- Navigation Header -->
    <navbar-component />

    <!-- Page Content -->
    <q-page-container>
      <router-view />
    </q-page-container>

    <!-- Footer -->
    <footer-component />
  </q-layout>
</template>

<script>
import NavbarComponent from '../components/layouts/NavbarComponent.vue'
import FooterComponent from '../components/layouts/FooterComponent.vue'

export default {
  name: 'MainLayout',
  components: {
    NavbarComponent,
    FooterComponent
  }
}
</script>
