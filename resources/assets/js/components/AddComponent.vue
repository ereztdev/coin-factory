<template>
    <div>

        <div class="card card-default">
            <div class="card-header">Add Coin</div>

            <div class="card-body">
                <form @submit.prevent="addCoin">

                    <div v-if="errors.length">
                        <b>Please correct the following error(s):</b>
                        <ul>
                            <li class="redErrors" v-for="error in errors">{{ error }}</li>
                        </ul>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                        <div class="col-md-6">
                            <input placeholder="Enter " id="email" type="text" class="form-control" v-model="coin.name" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="year" class="col-md-4 col-form-label text-md-right">Year</label>
                        <div class="col-md-6">
                            <input placeholder="Enter Date" type="text" class="form-control" v-model="coin.year">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                        <div class="col-md-6">
                            <input placeholder="Enter Price" type="text" class="form-control" v-model="coin.price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="coupon" class="col-md-4 col-form-label text-md-right">Coupon</label>
                        <div class="col-md-6">
                            <coupon-component @applied="onCouponApplied"></coupon-component>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button @click="validateMe()" :title="title" class="btn btn-primary">
                                Add
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                coin: {},
                errors: {},
                title: 'you sure buddy?',
                isDisabled: true,
                couponApplied: false,
            }
        },
        methods: {
            onCouponApplied(){
                this.couponApplied = true;
            },
            addCoin() {
                console.log();
                if (!this.validateMe()) {
                    console.log('breaking this.errors', JSON.stringify(this.errors));
                    return false;
                }
                // alert('submitted');
                let uri = 'coins';
                this.axios.post(uri, this.coin).then((response) => {
                    console.log(response);
                    this.coin.name = '';
                    this.coin.year = '';
                    this.coin.price = '';
                    window.location.reload();
                });
            },
            validateMe(e) {
                this.errors = [];
                if (this.coin.name && this.coin.year && this.coin.price) return true;

                if (!this.coin.name) this.errors.push("Coin Name required.");
                if (!this.coin.year) this.errors.push("Coin Year required.");
                if (!this.coin.price) this.errors.push("Coin purchase price required.");
            }
        }
    }
</script>