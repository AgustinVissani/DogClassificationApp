<template>
  <q-page-container
    class="q-layout-transition q-layout-page-container no-padding-top bg-white q-pb-xl"
  >
    <div class="dog-form q-pt-xl">
      <div class="row title-form">
        <div class="col-12 q-mb-xl">
          <h2 class="title text-center"><strong>Lista de</strong> Perros</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12 offset-md-3 form-container">
          <div v-for="dog in dogs" :key="dog.id">
            <DogDetails :dog="dog" @edit-dog="editDog" />
          </div>
        </div>
      </div>
    </div>
    <q-dialog v-model="showEditModal" content-class="q-mb-md">
      <q-card>
        <q-card-section class="row items-center q-pb-none">
          <div class="text-h6">Editar Perro</div>
          <q-space />
          <q-btn icon="close" flat round dense v-close-popup />
        </q-card-section>
        <q-card-section>
          <DogForm
            :dogData="selectedDogForEdit"
            :editMode="editMode"
            @form-submitted="handleEditFormSubmission"
          />
        </q-card-section>
      </q-card>
    </q-dialog>
  </q-page-container>
</template>

<script>
import { ref, onMounted, computed } from "vue";
import DogDetails from "components/DogDetails.vue";
import { useDogStore } from "stores/dogs";
import DogForm from "components/DogForm.vue";
import { Notify } from "quasar";

export default {
  setup() {
    const dogStore = useDogStore();
    const dogs = computed(() => dogStore.dogs);
    const showEditModal = ref(false);
    const editMode = ref(false); 
    onMounted(() => {
      dogStore.fetchDogs();
    });
    return {
      dogs,
      showEditModal,
      selectedDogForEdit: null,
      editMode,
    };
  },
  components: {
    DogDetails,
    DogForm,
  },
  methods: {
    editDog(dog) {
      this.selectedDogForEdit = { ...dog };
      this.showEditModal = true;
      this.editMode = true;
    },

    handleEditFormSubmission(editedDogData) {
      const requiredFields = ["breed_name", "size", "hair_color"];
      if (requiredFields.some((field) => !editedDogData[field])) {
        Notify.create({
          message: "Por favor, complete todos los campos",
          color: "negative",
        });
        return;
      }
      try {
        const store = useDogStore();
        store.update(editedDogData.id, editedDogData);
        Notify.create({
          message: "Perro actualizado con éxito",
          color: "positive",
        });
      } catch (error) {
        Notify.create({
          message: "Error al actualizar perro",
          color: "negative",
        });
      }

      this.showEditModal = false;
      this.editMode = false;
    },
  },
};
</script>
