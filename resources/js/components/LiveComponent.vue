

<template>
   <table class="table" cellspacing="5" style="font-size:10px">
        <tr v-for="fixture in fixtures" :key="fixture.league.name">
            <th>ID:{{  fixture.event.home }} Vs. {{  fixture.event.away }}<br> {{  fixture.event.start_time }} {{  fixture.league.name }}</th>
            <th>{{  fixture.event.home }}</th>
            <th>{{  fixture.event.away }}</th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+fixture.event.home+'/'+fixture.sites['1x2'].bet365.odds['1']+'/Home'">{{  fixture.event.home }} {{  fixture.sites['1x2'].bet365.odds['1'] }}</a></th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+  fixture.sport.name+ '/'+fixture.event.away+'/'+fixture.sites['1x2'].bet365.odds['X']+'/Draw'"> Draw {{  fixture.sites['1x2'].bet365.odds['X'] }}</a></th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+ fixture.event.away+'/'+fixture.sites['1x2'].bet365.odds['2']+'/Away'">{{  fixture.event.away }} {{  fixture.sites['1x2'].bet365.odds['2'] }}</a></th>

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

            axios.get('http://livescore-api.com/api-client/scores/events.json?key=b7bac190-06f2-11ea-acf9-650231394a73')
            .then(response =>{
                this.fixtures=response.data;
                console.log(response.data)
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>



