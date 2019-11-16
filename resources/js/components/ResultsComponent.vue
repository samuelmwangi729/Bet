<template>
   <table class="table" cellspacing="5" style="font-size:10px;margin:auto;width:50% !important">
        <tr v-for="fixture in fixtures" :key="fixture.results">
            <td>Game</td>
            <td>Competitors</td>
            <td>Winner</td>
            {{fixture.sport_event.competitors['0'].name}}
             <!-- {{"Winner"+fixture.sport_event_status.winner_id}} -->
             <span v-if="fixture.sport_event.competitors[0].id === fixture.sport_event_status.winner_id">
                 {{"Winner:"+fixture.sport_event.competitors['0'].name}}
             </span>
             <span style="color:red" v-else>
                 {{"Winner:"+fixture.sport_event.competitors['1'].name}}
             </span>
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

            axios.get('https://cors-anywhere.herokuapp.com/https://api.sportradar.com/tennis-t2/en/schedules/2016-07-06/results.json?api_key=j9qhevpfbjmyb4xc5qwkayx2')
            .then(response =>{
                this.fixtures=response.data.results;
                console.log(response.data.results)
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
