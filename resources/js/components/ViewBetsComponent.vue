<template>
    <div class="col-md offset-md-2">
    <table class="table table-hover table-striped text-left" style="margin-top:70px;font-size:10px">
        <tr>
            <th>Game ID</th>
            <th>Sport</th>
            <th>Pick</th>
            <th>Odd</th>
            <th>Outcome</th>
            <th>Placed At</th>
                <th>&nbsp;</th>
        </tr>
        <tr v-for="fixture,odd in fixtures" :key="fixture.id">
            <td>
                {{fixture.gameId}}
            </td>
             <td>
                {{fixture.Sport}}
            </td>
            <td>
                {{fixture.Team}}
            </td>
            <td>
                {{fixture.Odd.toFixed(2)}}
            </td>
            <td>
                {{fixture.Outcome}} Win
            </td>
            <td>
                {{fixture.created_at}} 
            </td>
            <td>
               <a v-bind:href="'/del/'+fixture.id">&times</a>
            </td>
        </tr>
        <tr>
        <td colspan="7" class="text-right" style="color:red;font-weight:bold">
         Total Odds: {{Odds}} &nbsp;<a href="#" class="badge badge-primary">Place Bet</a>
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
                Odds:'',

            }
        },
        mounted() {
            var self=this;

            axios.get('http://127.0.0.1:8000/77cfd8c4ee27a93e2575f9e4ab134273491ac162')
            .then(response =>{
                this.fixtures=response.data;
                console.log(response.data);
                var i;
                var Odd=1;
                for(i=0;i<response.data.length;i++){
                  Odd=Odd*response.data[i].Odd.toFixed(2);
                }
                this.Odds=Odd.toFixed(4);
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
