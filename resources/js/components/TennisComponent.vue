
<template>
   <table class="table">
      <div class="container mr-auto" style="padding-top:20px;float:right">
          <form id="postForm" class="form-inline" >
               <button class="btn btn-success" type="submit" name="submit" style="width:200px"> Post Matches Into Database</button>
              </form>
          </div><br>
        <tr v-for="fixture in fixtures" :key="fixture.league.name">
                <th>ID:{{  fixture.event.home }} Vs. {{  fixture.event.away }}<br> {{  fixture.event.start_time }} {{  fixture.league.name }}</th>
            <th>{{  fixture.event.home }}</th>
            <th>{{  fixture.event.away }}</th>
            <th><button class="btn btn-success" style="width:200px">{{  fixture.event.home }} {{  fixture.sites['1x2'].bet365.odds['1'] }}</button></th>
            <th><button class="btn btn-success" style="width:200px"> Draw {{  fixture.sites['1x2'].bet365.odds['X'] }}</button></th>
            <th><button class="btn btn-success" style="width:200px">{{  fixture.event.away }} {{  fixture.sites['1x2'].bet365.odds['2'] }}</button></th>
            <th><a href="/Store"></a></th>
        </tr>
     </table>
</template>
<template
<script>
    export default {
        data() {
            return{
                fixtures:[]
            }
        },
        mounted() {
            var self=this;

            axios.get('https://app.oddsapi.io/api/v1/odds?sport=soccer&country=europe&league=soccer-europe-europa-league&apikey=f4b7f540-fa2c-11e9-a8e3-51b3476555d8')
            .then(response =>{
                this.fixtures=response.data;
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
