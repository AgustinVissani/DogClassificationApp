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
        console.error("Error adding dog", error);
      }
    },
  },
});
