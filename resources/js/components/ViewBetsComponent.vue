<template>
   <table class="table" cellspacing="5" style="font-size:10px">
        <tr v-for="fixture in fixtures" :key="fixture.id">
        </tr>
     </table>
</template>

<script>
    export default {
        data() {
            return{
                fixtures:[],
                home:[],


            }
        },
        mounted() {
            var self=this;

            axios.get('http://127.0.0.1:8000/77cfd8c4ee27a93e2575f9e4ab134273491ac162')
            .then(response =>{
                this.fixtures=response.data;
                console.log(response.data)
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
