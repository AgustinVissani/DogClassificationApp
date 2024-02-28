
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexPage.vue') },
      { path: '/upload-dog', component: () => import('pages/UploadDog.vue') },
      { path: '/dog-details', component: () => import('pages/DogDetailsPage.vue') },
      { path: '/europa-language-jobs', component: () => import('pages/EuropeLanguageJobs.vue') },
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
