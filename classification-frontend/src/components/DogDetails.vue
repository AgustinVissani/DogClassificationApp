<template>
  <div>
    <h4>Detalles del Perro</h4>
    <div><strong>Nombre:</strong> {{ dog.breed_name }}</div>
    <div><strong>Tamaño:</strong> {{ dog.size }}</div>
    <div><strong>Color de Pelo:</strong> {{ dog.hair_color }}</div>
    <div>
      <img
        :src="backendUrl + `/storage/${dog.image_path}`"
        alt="Foto del perro"
      />
    </div>
  </div>
</template>

<script>
const backendUrl = process.env.VUE_APP_BACKEND_URL;
export default {
  props: {
    dog: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      backendUrl: backendUrl,
    };
  },
};
</script>
