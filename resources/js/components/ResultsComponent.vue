<template>
   <div class="row justify-content-center">
    <table class="table table-bordered">
       <tr>
           <td>GameId</td>
            <td>Competitors</td>
            <td>Winner</td>
            <td>Status</td>
       </tr>
        <tr v-for="fixture in fixtures" :key="fixture.results">
            <td>{{fixture.sport_event.id.split(':')[2]}}</td>
            <td>{{fixture.sport_event.competitors['0'].name + ". Vs ."+fixture.sport_event.competitors['1'].name}}</td>
            <td>
                 <!-- {{"Winner"+fixture.sport_event_status.winner_id}} -->
             <span style="color:red" v-if="fixture.sport_event.competitors[0].id === fixture.sport_event_status.winner_id">
                 {{fixture.sport_event.competitors['0'].name}}
             </span>
             <span style="color:red" v-else>
                 {{fixture.sport_event.competitors['1'].name}}
             </span>
            </td>
            <td>
               {{completed}}
            </td>
            
        </tr>
    </table>
   </div>
</template>

<script>
    export default {
        data() {
            return{
                fixtures:[],
                home:[],
                completed:'completed',
            }
        },
        mounted() {
            var self=this;

            axios.get('https://cors-anywhere.herokuapp.com/https://api.sportradar.com/tennis-t2/en/schedules/2019-11-06/results.json?api_key=j9qhevpfbjmyb4xc5qwkayx2')
            .then(response =>{
                this.fixtures=response.data.results;
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
