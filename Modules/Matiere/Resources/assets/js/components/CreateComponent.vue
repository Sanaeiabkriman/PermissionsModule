<template>

    <div>
        <h1>Create A chapitre</h1>
    <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <router-link :to="{ name: 'index' }" class="btn btn-primary">Retour</router-link>
        </div>
    </div>
        <form v-on:submit.prevent="addChapitre" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Intitulé du cours:</label>
                        <input type="text" class="form-control" v-model="chapitre.nom">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" type="text" v-model="chapitre.description" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Compétences:</label>
                        <textarea class="form-control" type="text" v-model="chapitre.competences" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Prérequis:</label>
                        <textarea class="form-control" type="text" v-model="chapitre.prerequis" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <select v-model="chapitre.parent">
                            <option value="NULL"> </option>
                            <option v-for="chapitre in chapitres" :key="chapitre.id">{{chapitre.nom}}</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <input type="file" id="file" name="image" ref="file" v-on:change="onFileChange"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
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
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {

            return {
                chapitre: {},
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


            addChapitre() {
                let app = this
                let formData = new FormData()
                formData.append('image', this.image)
                formData.append('nom', this.chapitre.nom)
                formData.append('parent', this.chapitre.parent)
                formData.append('competences', this.chapitre.competences)
                formData.append('description', this.chapitre.description)
                formData.append('prerequis', this.chapitre.prerequis)
                
                axios.post('/chapitres/create', formData).then((response) => {
                    app.$router.push({
                        name: 'index'
                    });

                }).catch(error => {
                    if (error.response.status) {
                        this.err = error.response.data.errors;
                    }
                    console.log(this.err)
                });
            },
        },
        
        mounted() {
            axios.get('/chapitres/fetchtype').then((response, data) => {
                this.types = response.data
            })
            axios.get('/chapitres/fetch').then((response, data) => {
                this.chapitres = response.data
            })
        }
    }

</script>
