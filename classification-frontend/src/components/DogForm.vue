<template>
  <q-form @submit="submitForm" autocomplete="off">
    <div class="row">
      <div class="col-md-6 col-xs-12 block-fields">
        <q-field>
          <q-input v-model="breed_name" label="Nombre de la raza" />
        </q-field>
        <q-field>
          <q-select
            v-model="size"
            :options="sizeOptions"
            label="Tamaño"
            aria-placeholder="Tamaño"
          />
        </q-field>
      </div>
      <div class="col-md-6 col-xs-12 block-fields">
        <q-field>
          <q-input v-model="hair_color" label="Color de pelo" />
        </q-field>
        <q-field>
          <q-file v-model="image" label="Subir foto" accept="image/*" />
        </q-field>
        <div v-if="editMode && currentImagePath">
          <q-item-section top thumbnail class="q-ml-none">
            <img
              :src="backendUrl + `/storage/${currentImagePath}`"
              alt="Foto actual del perro"
            />
          </q-item-section>
        </div>
      </div>
    </div>
    <div class="q-mt-md flex align-center justify-center">
      <q-btn type="submit" class="bg-primary text-white save-dog"
        >Guardar</q-btn
      >
    </div>
  </q-form>
</template>

<script>
const backendUrl = process.env.VUE_APP_BACKEND_URL;

export default {
  props: {
    editMode: {
      type: Boolean,
      default: false,
    },
    dogData: {
      type: Object,
      default: null,
    },
  },
  data() {
    return {
      breed_name: this.editMode ? this.dogData.breed_name : "",
      size: this.editMode ? this.dogData.size : "",
      hair_color: this.editMode ? this.dogData.hair_color : "",
      image: null,
      sizeOptions: ["Pequeño", "Mediano", "Grande"],
      currentImagePath: this.editMode ? this.dogData.image_path : "",
      backendUrl: backendUrl,
    };
  },
  methods: {
    submitForm() {
      const formData = {
        breed_name: this.breed_name,
        size: this.size,
        hair_color: this.hair_color,
        image: this.image,
      };

      if (this.editMode) {
        formData.id = this.dogData.id;
      }

      this.$emit("form-submitted", formData);
    },
    clearFormFields() {
      this.breed_name = "";
      this.size = "";
      this.hair_color = "";
      this.image = null;
    },
  },
  watch: {
    editMode: function (newEditMode) {
      if (newEditMode && this.dogData) {
        this.breed_name = this.dogData.breed_name;
        this.size = this.dogData.size;
        this.hair_color = this.dogData.hair_color;
        this.currentImagePath = this.dogData.image_path;
      } else {
        this.clearFormFields();
        this.currentImagePath = "";
      }
    },
    dogData: function (newDogData) {
      if (this.editMode && newDogData) {
        this.breed_name = newDogData.breed_name;
        this.size = newDogData.size;
        this.hair_color = newDogData.hair_color;
        this.currentImagePath = newDogData.image_path;
      } else {
        this.clearFormFields();
        this.currentImagePath = "";
      }
    },
  },
};
</script>
