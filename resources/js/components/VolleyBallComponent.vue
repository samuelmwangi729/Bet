<template>
   <table class="table" cellspacing="5" style="font-size:10px">
        <tr v-for="fixture in fixtures" :key="fixture.id">
            {{fixture['sites']['homeaway']['1xbet'].odds}}
            <!-- <th>ID:{{  fixture.event.home }} Vs. {{  fixture.event.away }}<br> {{  fixture.event.start_time }} {{  fixture.league.name }}</th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+fixture.event.home+'/'+fixture.sites.homeaway.bet536.odds['1'] }}</a></th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+  fixture.sport.name+ '/'+fixture.event.away+'/'+fixture.sites['1x2']['1xbet'].odds['X']+'/Draw'"> Draw {{  fixture.sites['1x2']['1xbet'].odds['X'] }}</a></th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+ fixture.event.away+'/'+fixture.sites['1x2']['1xbet'].odds['2']+'/Away'">{{  fixture.event.away }} {{  fixture.sites['1x2']['1xbet'].odds['2']}}</a></th> -->
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

            axios.get('https://app.oddsapi.io/api/v1/odds?sport=tennis&apikey=4d7815c0-fca3-11e9-9eb0-099a0ceed22d')
            .then(response =>{
                this.fixtures=response.data;
                console.log(response.data)
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
