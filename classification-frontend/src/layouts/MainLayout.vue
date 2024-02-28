<template>
  <q-layout view="lHh Lpr lFf">
    <q-header class="navbar">
      <div
        class="q-toolbar row no-wrap items-center relative-position q-pa-none q-toolbar-normal bg-primary text-white"
      >
        <div class="layout-padding toolbar-content">
          <div class="row">
            <div class="col-3">
              <q-btn flat to="/" tabindex="0" class="inline relative-position">
                <q-icon name="home" />
              </q-btn>
            </div>
            <div class="col-9 text-right">
              <q-btn
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
                to="/upload-dog"
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
              <q-btn
                to="/europa-language-jobs"
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
                Europe language jobs
              </q-btn>
            </div>
          </div>
        </div>
      </div>
    </q-header>
    <q-page-container>
      <router-view />
    </q-page-container>
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
