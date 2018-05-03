<template>
    <div>
        <input class="form-control" placeholder="Enter Coupon code" @blur="onCouponApplied"/>
        <h1 v-if="couponApplied">you used coupon</h1>
    </div>
</template>

<script>
    export default {
        name: "CouponComponent",
        // data() {
        //     return{
        //         couponApplied: false,
        //     }
        // },

        methods: {
            onCouponApplied() {
                this.$emit('applied')
            }
        }
    }
</script>

<style scoped>

</style>