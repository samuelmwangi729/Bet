<template>
   <table class="table" cellspacing="5" style="font-size:10px">
        <tr v-for="fixture in fixtures" :key="fixture.id">
        {{fixtures.length}}
        <h1 v-if="size===0">No Game</h1>
        <span v-else>
            <th>ID:{{  fixture.event.home }} Vs. {{  fixture.event.away }}<br> {{  fixture.event.start_time }} {{  fixture.league.name }}</th>
            <th><a class="btn btn-success" style="width:300px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+fixture.event.home+'/'+fixture.sites.homeaway['1xbet'].odds['1']+'/Home'">{{  fixture.event.home }} {{  fixture.sites.homeaway['1xbet'].odds['1'] }}</a></th>
            <th><a class="btn btn-success" style="width:300px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+ fixture.event.away+'/'+fixture.sites.homeaway['1xbet'].odds['2']+'/Away'">{{  fixture.event.away }} {{  fixture.sites.homeaway['1xbet'].odds['2']}}</a></th>
        </span>
        </tr>
     </table>
</template>

<script>
    export default {
        data() {
            return{
                fixtures:[],
                size: '',


            }
        },
        mounted() {
            var self=this;

            axios.get('https://app.oddsapi.io/api/v1/odds?sport=tennis&apikey=4d7815c0-fca3-11e9-9eb0-099a0ceed22d')
            .then(response =>{
                this.fixtures=response.data;
                this.size=response.data.length;
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
