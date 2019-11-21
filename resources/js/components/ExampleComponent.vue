<template>
   <table class="table" cellspacing="5" style="font-size:10px;margin:auto;width:50% !important">
        <tr v-for="fixture in fixtures" :key="fixture.id">
            {{fixture}}
            <!-- <th>ID:{{  fixture.event.home }} Vs. {{  fixture.event.away }}<br> {{  fixture.event.start_time }} {{  fixture.league.name }}</th>
            <th><a class="btn btn-success" style="width:200px;font-size:10px" v-bind:href="'Fetch/'+fixture.event.home+'-'+fixture.event.away+'/'+ fixture.sport.name+ '/'+fixture.event.home+'/'+fixture.sites['1x2']['1xbet'].odds['1']+'/Home'">{{  fixture.event.home }} {{  fixture.sites['1x2']['1xbet'].odds['1'] }}</a></th>
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
            var xhr=new XMLHttpRequest();
            var data =xhr.open('GET','http://prematch.lsports.eu/OddService/GetMarkets?username=samuelmwangi729%40gmail.com&password=dfwe43&guid=86943baf-94f0-4dbb-b3c0-9538831e781f');
            xhr.send();
            xhr.onload=() =>{
            console.log(xhr.response)
            }
        }
    }
</script>
