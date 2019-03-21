<template>
    <div>
        <h1>Create A chapitre</h1>
        <form v-on:submit.prevent="addChapitre()">
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
                        <label>Parent:</label>
                        <textarea class="form-control" type="text" v-model="chapitre.parent" rows="3"></textarea>
                    </div>
                   <!-- <div class="form-group">
                        <label>Parent:</label>
                        <select name="" id="">
                        <option class="form-control" v-model="chapitre.parent" v-for="chapitre in chapitres" :key="chapitre" rows="3"></option>
                        </select>
                    </div> -->
                </div>
            </div>
            <br />
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
               chapitre:{}
            }
        },
        methods: {
            addChapitre() {
                let uri = '/chapitre/create';
                this.axios.post(uri, this.chapitre).then((response) => {
                    this.$router.push({name: 'index'});
                });
            }          
        }
    }
</script>
