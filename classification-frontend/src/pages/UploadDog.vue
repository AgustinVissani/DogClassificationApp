<template>
  <q-page-container
    class="q-layout-transition q-layout-page-container no-padding-top bg-white q-pb-xl"
  >
    <div class="dog-form q-pt-xl">
      <div class="row title-form">
        <div class="col-12 q-mb-xl">
          <h2 class="title text-center">
            <strong>Agregue nuevo</strong> perro!
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12 offset-md-3 form-container">
          <DogForm ref="dogForm" @form-submitted="handleFormSubmission" />
        </div>
      </div>
    </div>
  </q-page-container>
</template>

<script>
import DogForm from "components/DogForm.vue";
import { useDogStore } from "stores/dogs";
import { Notify } from "quasar";

export default {
  components: {
    DogForm,
  },
  data() {
    return {
      dogData: {
        breed_name: "",
        size: "",
        hair_color: "",
        image: null,
      },
    };
  },
  methods: {
    async handleFormSubmission(dogData) {
      const requiredFields = ["breed_name", "size", "hair_color"];
      if (requiredFields.some((field) => !dogData[field])) {
        Notify.create({
          message: "Por favor, complete todos los campos",
          color: "negative",
        });
        return;
      }
      try {
        const dogStore = useDogStore();
        const response = await dogStore.addDog(dogData);
        if (response.status === 200) {
          Notify.create({
            message: "Perro agregado con éxito",
            color: "positive",
          });
          this.$refs.dogForm.clearFormFields();
        } else {
          Notify.create({
            message: "Error al agregar el perro",
            color: "negative",
          });
          console.error("Error al agregar el perro:", response.data);
        }
      } catch (error) {
        Notify.create({
          message: "Error al agregar el perro",
          color: "negative",
        });
        console.error("Error al agregar el perro:", error);
      }
    },
  },
};
</script>
