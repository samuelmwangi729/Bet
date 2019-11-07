<template>
   <table class="table" cellspacing="5" style="font-size:10px">
        <tr v-for="fixture in fixtures" :key="fixture.id">
            {{fixture.sites.homeaway.interetten}}
            <!-- <th>ID:{{  fixture.event.home }} Vs. {{  fixture.event.away }}<br> {{  fixture.event.start_time }} {{  fixture.league.name }}</th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+fixture.event.home+'/'+home+'/Home'">{{  fixture.event.home }} {{  home}}</a></th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+  fixture.sport.name+ '/'+fixture.event.away+'/'+fixture.sites.homeaway+'/Draw'"> Draw {{  fixture.sites.homeaway }}</a></th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+ fixture.event.away+'/'+fixture.sites.homeaway+'/Away'">{{  fixture.event.away }} {{  fixture.sites.homeaway}}</a></th> -->
        </tr>
     </table>
</template>

<script>
    export default {
        data() {
            return{
                fixtures:[],
                home: [],
                defaults:1.9


            }
        },
        mounted() {
            var self=this;

            axios.get('https://app.oddsapi.io/api/v1/odds?sport=cricket&apikey=4d7815c0-fca3-11e9-9eb0-099a0ceed22d')
            .then(response =>{
                this.fixtures=response.data;
                console.log(response.data)
                var i;
                for(i=0;i<response.data.length;i++){
                    // this.home=response.data[i].sites.homeaway['interwetten'].odds['1']
                    var ss=typeof(response.data[i].sites.homeaway['interwetten'].odds['1'])

                }
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
