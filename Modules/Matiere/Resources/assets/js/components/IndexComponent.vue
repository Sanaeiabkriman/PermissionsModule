<template>
  <div class="container">
    <h1>chapitres</h1>

    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'createform' }" class="btn btn-primary">Create chapitre</router-link>
      </div>
    </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <td>ID</td>
          <td>chapitre Name</td>
          <td>chapitre Price</td>
          <td>chapitre Type</td>
          <td>Actions</td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="chapitre in chapitres" :key="chapitre.id">
          <td>{{ chapitre.id }}</td>
          <td>{{ chapitre.nom }}</td>
          <td>{{ chapitre.description }}</td>
          <td>
            <router-link
              :to="{name: 'edit', params: { id: chapitre.id }} "
              class="btn btn-primary"
            >Edit</router-link>
          </td>
          <td>
            <button class="btn btn-danger" v-on:click="deletechapitre(chapitre.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      chapitres: []
    };
  },

  created: function() {
    this.fetchChapitres();
  },

  methods: {
    fetchChapitres() {
      this.axios.get("/chapitres/fetch").then(response => {
        this.chapitres = response.data;
      });
    },
    deletechapitre(id) {
      let uri = `/chapitres/delete/${id}`;

      this.axios.post(uri).then(response => {
        this.chapitres.splice(this.chapitres.indexOf(id));
          this.$router.push({
            name: "index"
          });

      });
    }
  }
};
</script>