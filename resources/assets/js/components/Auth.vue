<template>
    <div class="container text-center"><h1>Auth</h1></div>
</template>

<script>
    export default {
        name: "Auth",
        data() {
            return {
                call: function (theRoute) {
                    console.log("theRoute", theRoute);
                },
                methods: {
                    route(theRoute) {
                        theRoute ? this.call(theRoute) : "#";
                    }
                }
            }
        }

    }
</script>

<style scoped>

</style>