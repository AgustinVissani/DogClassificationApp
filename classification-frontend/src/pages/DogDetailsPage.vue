<template>
  <q-page>
    <div class="q-gutter-md">
      <h4>Lista de Perros</h4>
      <div v-for="dog in dogs" :key="dog.id">
        <DogDetails :dog="dog" />
      </div>
    </div>
  </q-page>
</template>

<script>
import { onMounted, computed } from 'vue';
import DogDetails from "components/DogDetails.vue";
import { useDogStore } from 'stores/dogs';

export default {
  setup() {
    const dogStore = useDogStore();
    const dogs = computed(() => dogStore.dogs);
    onMounted(() => {
      dogStore.fetchDogs();
    });
    return {
      dogs
    };
  },
  components: {
    DogDetails,
  },
};
</script>
