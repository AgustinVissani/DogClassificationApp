<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated class="navbar">
      <q-toolbar
        q-pa-none
        q-toolbar-normal
        class="row no-wrap items-center relative-position bg-primary text-white"
      >
        <q-btn flat to="/" tabindex="0" class="inline relative-position">
          <q-icon name="home" />
        </q-btn>
        <q-space />
        <q-btn
          to="/upload-dog"
          flat
          no-caps
          dense
          q-btn-item
          non-selectable
          q-py-sm
          q-px-md
          q-btn-rectangle
          q-focusable
          q-hoverable
          tabindex="0"
          type="button"
          class="inline relative-position"
        >
          Agregar
        </q-btn>
        <q-btn
          to="/dog-details"
          flat
          no-caps
          dense
          q-btn-item
          non-selectable
          q-py-sm
          q-px-md
          q-btn-rectangle
          q-focusable
          q-hoverable
          tabindex="0"
          type="button"
          class="inline relative-position"
        >
          Listar
        </q-btn>
      </q-toolbar>
    </q-header>
    <q-page-container>
      <router-view />
    </q-page-container>
    <q-footer fixed class="bg-primary text-white">
    <hr color="#0c3866" />
    <q-toolbar class="row items-center q-gutter-md">
      <div class="q-gutter-sm col-xs-12">
        Copyright © 2024 - Dogs App. All rights reserved.
      </div>
    </q-toolbar>
  </q-footer>
  </q-layout>
</template>

<script>
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "MainLayout",

  setup() {
    const leftDrawerOpen = ref(false);

    return {
      leftDrawerOpen,
      toggleLeftDrawer() {
        leftDrawerOpen.value = !leftDrawerOpen.value;
      },
    };
  },
});
</script>
