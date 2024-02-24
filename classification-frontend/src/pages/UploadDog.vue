<template>
  <q-page>
    <div class="q-gutter-md">
      <h4>Subir Detalles del Perro</h4>
      <DogForm @form-submitted="handleFormSubmission" />
    </div>
  </q-page>
</template>

<script>
import DogForm from "components/DogForm.vue";
import { useDogStore } from "stores/dogs";

export default {
  components: {
    DogForm,
  },
  methods: {
    async handleFormSubmission(dogData) {
      try {
        const dogStore = useDogStore();
        const response = await dogStore.addDog(dogData);
        console.log("Respuesta del servidor:", response.data);
      } catch (error) {
        console.error("Error al enviar los datos del perro:", error);
      }
    },
  },
};
</script>
