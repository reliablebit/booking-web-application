const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/landing/LandingPage.vue') }
    ],
  },

  {
    path: '/:catchAll(.*)*',
    component: () => import('src/pages/error/ErrorNotFound.vue'),
  },
]

export default routes
