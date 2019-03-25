<template>
    <div>
        <h1>Create A chapitre</h1>
        <form v-on:submit.prevent="addChapitre">
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
                        <select>
                            <option value="NULL"> </option>
                            <option value="" v-for="chapitre in chapitres" :key="chapitre.id">{{chapitre.nom}}</option>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label>Type :</label>
                        <select>
                        <option value="" v-for="type in types" :key="type.id">{{type.nom}}</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon" v-for="type in types" :key="type.id">
                                    <input  type="checkbox" >{{type.nom}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
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
                chapitres:[],
                types:[],
                err: "",

            }
         
        },
        methods: {
            addChapitre() {
                let uri = '/chapitres/create';
                this.axios.post(uri, this.chapitre).then((response) => {
                    this.$router.push({
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
        mounted() {
            axios.get('/chapitres/fetchtype').then((response, data)=>{
                this.types=response.data
            })
            axios.get('/chapitres/fetch').then((response, data)=>{
                this.chapitres=response.data
            })   
        }
    }
</script>
