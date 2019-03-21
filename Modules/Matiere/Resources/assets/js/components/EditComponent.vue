
<template>
    <div>
        <h1>Update Chapitre</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2"><router-link :to="{ name: 'index' }" class="btn btn-success">Return to Chapitres</router-link></div>
        </div>

        <form v-on:submit.prevent="update">
            <div class="form-group">
                <label>chapitre Name</label>
                <input type="text" class="form-control" v-model="chapitre.nom">
            </div>

            <div class="form-group">
                <label name="description">chapitre Price</label>
                <input type="text" class="form-control" v-model="chapitres.description">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>

<script>

    export default{
        data(){
            return{
                chapitre:{}
            }
        },

        created: function(){
            this.getChapitre();
        },

        methods: {
            getChapitre() {
              let uri = `/chapitres/${this.$route.params.id}/edit`;
                this.axios.get(uri).then((response) => {
                    this.chapitre = response.data;
                });
            },

            updateChapitre()
            {
              let uri = '/chapitres/'+this.$route.params.id;
                this.axios.patch(uri, this.chapitre).then((response) => {
                  this.$router.push({name: 'index'});
                });
            }
        }
    }
</script>