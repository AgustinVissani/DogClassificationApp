<template>
  <q-layout view="lHh Lpr lFf">
    <q-header class="q-layout-header q-layout-marginal q-layout-transition navbar fixed-top">
      <q-toolbar class="row no-wrap items-center relative-position q-pa-none q-toolbar-normal bg-primary text-white">
        <q-page-sticky>
        <q-toolbar-title class="layout-padding toolbar-content">
          <q-btn
            tabindex="0"
            type="button"
            class="inline relative-position q-btn-item non-selectable lt-md pull-right q-btn-rectangle q-btn-flat q-focusable q-hoverable"
          >
            <q-icon name="menu" />
          </q-btn>
          <q-btn
            tabindex="0"
            type="button"
            class="inline relative-position q-btn-item non-selectable q-py-sm q-px-md q-btn-rectangle q-btn-flat q-focusable q-hoverable q-btn-no-uppercase q-btn-dense"
          >
            Jobs
          </q-btn>
        </q-toolbar-title>
      </q-page-sticky>
      </q-toolbar>
    </q-header>
    <q-aside>
      <q-list link inset-delimiter>
        <q-item to="/">
          <q-item-section avatar>
            <q-avatar>
              <q-icon name="home" />
            </q-avatar>
          </q-item-section>
          <q-item-section>Inicio</q-item-section>
        </q-item>

        <q-item to="/upload-dog">
          <q-item-section avatar>
            <q-avatar>
              <q-icon name="cloud_upload" />
            </q-avatar>
          </q-item-section>
          <q-item-section>Subir Perro</q-item-section>
        </q-item>

        <q-item to="/dog-details">
          <q-item-section avatar>
            <q-avatar>
              <q-icon name="info" />
            </q-avatar>
          </q-item-section>
          <q-item-section>Detalles del Perro</q-item-section>
        </q-item>
      </q-list>
    </q-aside>


    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'MainLayout',

  setup () {
    const leftDrawerOpen = ref(false)

    return {
      leftDrawerOpen,
      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
})
</script>
