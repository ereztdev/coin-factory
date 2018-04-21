<template>
    <div class="container">
    <table class="coin-table" v-if="coins">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Year</th>
        </tr>
        <tr v-for="coin in coins">
            <td>{{coin.id}}</td>
            <td>{{coin.name}}</td>
            <td>{{coin.price}}</td>
            <td>{{coin.year}}</td>
        </tr>
    </table>
    </div>
</template>

<script>
    export default {
        //name: "GetComponent"
        data() {
            return {
                coins:{}
            }
        },
        methods: {
            getCoins() {
                let uri = 'list';
                this.axios.get(uri)
                    .then((response) =>{
                  this.coins = response.data;
                })
            }
        },
        created(){
            this.getCoins();
        }
    }
</script>

<style scoped>

</style>