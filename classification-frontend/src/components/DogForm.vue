<template>
    <q-form @submit="submitForm">
      <q-input v-model="breed_name" label="Nombre de la raza" />
      <q-select v-model="size" :options="sizeOptions" label="Tamaño" />
      <q-input v-model="hair_color" label="Color de pelo" />
      <q-file v-model="image" label="Subir foto" accept="image/*" />
      <q-btn type="submit" label="Enviar" />
    </q-form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        breed_name: "",
        size: "",
        hair_color: "",
        image: null,
        sizeOptions: ["Pequeño", "Mediano", "Grande"],
      };
    },
    methods: {
      submitForm() {
        this.$emit("form-submitted", {
          breed_name: this.breed_name,
          size: this.size,
          hair_color: this.hair_color,
          image: this.image,
        });
      },
    },
  };
  </script>
  