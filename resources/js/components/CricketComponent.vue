<template>
   <table class="table" cellspacing="5" style="font-size:10px">
        <tr v-for="fixture in fixtures" :key="fixture.sites">
            {{fixture['sites'].homeaway.bet365}}
        </tr>
     </table>
</template>

<script>
    export default {
        data() {
            return{
                fixtures:[],

            }
        },
        mounted() {
            var self=this;

            axios.get('https://app.oddsapi.io/api/v1/odds?sport=cricket&apikey=4d7815c0-fca3-11e9-9eb0-099a0ceed22d')
            .then(response =>{
                this.fixtures=response.data;
                console.log(response.data)
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
