<template>
  <div>
    <q-item>
      <q-item-section top thumbnail class="q-ml-none">
        <q-item-label>Imagen: </q-item-label>
        <img
          :src="backendUrl + `/storage/${dog.image_path}`"
          alt="Foto del perro"
        />
      </q-item-section>

      <q-item-section>
        <q-item-label>Nombre de raza: </q-item-label>
        <q-item-label caption>{{ dog.breed_name }}</q-item-label>
      </q-item-section>

      <q-item-section>
        <q-item-label>Tamaño: </q-item-label>
        <q-item-label caption>{{ dog.size }}</q-item-label>
      </q-item-section>

      <q-item-section>
        <q-item-label>Color de pelo: </q-item-label>
        <q-item-label caption>{{ dog.hair_color }}</q-item-label>
      </q-item-section>

      <q-item-section>
        <q-btn
          flat
          tabindex="0"
          class="inline relative-position"
          @click="deleteDog"
        >
          <q-icon name="delete" />
        </q-btn>
      </q-item-section>

      <q-item-section>
        <q-btn
          flat
          tabindex="0"
          class="inline relative-position"
          @click="editDog"
        >
          <q-icon name="edit" />
        </q-btn>
      </q-item-section>
    </q-item>
  </div>
</template>

<script>
const backendUrl = process.env.VUE_APP_BACKEND_URL;
import { useDogStore } from "stores/dogs";
import { Notify } from "quasar";

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
  methods: {
    deleteDog() {
      try {
        const store = useDogStore();
        store.delete(this.dog.id);
        Notify.create({
          message: "Perro eliminado con éxito",
          color: "positive",
        });
      } catch (error) {
        Notify.create({
          message: "Error al eliminar perro",
          color: "negative",
        });
      }
    },
    editDog() {
      this.$emit("edit-dog", this.dog);
    },
  },
};
</script>
