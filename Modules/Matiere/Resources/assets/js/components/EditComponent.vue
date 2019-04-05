<template>
    <div>
        <h1>Update Chapitre</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'index' }" class="btn btn-success">Return to Chapitres</router-link>
            </div>
        </div>


        <form v-on:submit.prevent="updateChapitre" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Chapitre nom</label>
                        <input type="text" class="form-control" v-model="chapitre.nom" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name="description"> Description </label>
                        <input type="text" class="form-control"   v-model="chapitre.description">
                    </div>
                    <div class="form-group">
                        <label name="competences"> Compétences</label>
                        <input type="text" class="form-control" v-model="chapitre.competences">
                    </div>
                    <div class="form-group">
                        <label name="prerequis">Prérequis</label>
                        <input type="text" class="form-control" v-model="chapitre.prerequis">
                    </div>
                    <div class="form-group">
                        <select v-model="chapitre.parent">
                            <option value="NULL">Aucun </option>
                            <option v-for="chapitre in chapitres" :key="chapitre.id">{{chapitre.nom}}</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <input type="file" id="file" name="image" ref="file" v-on:change="onFileChange"
                                class="bg-white p-3">
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon" v-for="type in types" :key="type.id">
                                    <input type="checkbox">{{type.nom}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group m-5">
                <button class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                chapitre: {
                    nom: "",
                    description:"",
                    prerequis:"",

                },
                chapitres: [],
                types: [],
                err: "",
                image: '',
            }
        },

        methods: {
            onFileChange(e) {
                this.image = e.target.files[0];
            },

            updateChapitre() {
                let upapp = this;
                axios.post('/chapitres/update/'+ this.$route.params.id, this.chapitre).then((response) => {
                    upapp.$router.push({
                        name: 'index'
                    });
                }).catch(error => {
                    if (error.response.status) {
                        this.err = error.response.data.errors;
                    }
                    console.log(this.err)
                });
            }
        },
       
        created() {
            axios.get('/chapitres/fetchedit/'+ this.$route.params.id).then((response, data) => {
           this.chapitre = response.data;
            });
    },

        mounted() {
            axios.get('/chapitres/fetchtype').then((response, data) => {
                this.types = response.dat
            })
            axios.get('/chapitres/fetch').then((response, data) => {
                this.chapitres = response.data
            })

            axios.get('/chapitres/fetchedit/'+ this.$route.params.id).then((response, data) => {
                this.chapitre = response.data
            })
        }
    }

</script>
