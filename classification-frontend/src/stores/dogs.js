import { defineStore } from "pinia";
import axios from "axios";

export const useDogStore = defineStore("dog", {
  state: () => ({
    dogs: [],
  }),
  actions: {
    async fetchDogs() {
      try {
        const response = await axios.get(
          process.env.VUE_APP_BACKEND_URL + "/api/dogs"
        );
        this.dogs = response.data.dogs;
      } catch (error) {
        console.error("Error fetching dogs", error);
      }
    },
    async addDog(newDog) {
      try {
        const response = await axios.post(
          process.env.VUE_APP_BACKEND_URL + "/api/dogs",
          newDog,
          {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          }
        );
        this.fetchDogs();
        return response;
      } catch (error) {
        console.error("Error agregando el perro", error);
      }
    },
    async delete(id) {
      try {
        await axios.delete(`${process.env.VUE_APP_BACKEND_URL}/api/dogs/${id}`);
        this.fetchDogs();
      } catch (error) {
        console.error(`Error eliminando el perro con ID ${id}`, error);
      }
    },
    async update(id, dogUpdated) {
      try {
        const response = await axios.put(
          process.env.VUE_APP_BACKEND_URL + "/api/dogs/" + id,
          dogUpdated
        );
        this.fetchDogs();
        return response;
      } catch (error) {
        console.error(`Error actualizando el perro con ID ${id}`, error);
      }
    },
  },
});
