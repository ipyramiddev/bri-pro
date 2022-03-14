<template>
    <div>
        <div class="header">
            <h1>{{$t('checkout.title')}}</h1>
        </div>
        <div class="container">
            <div class="content">
                <div class="category_level">
                    <h4>{{$t('category_level')}} <router-link class="change" :to="{name: $t('purchase.url')}">{{$t('change')}}</router-link></h4>
                    <div style="padding-left: 20px;">
                        <h6>{{$t('category_application_description')}} <span class="category">{{category.app_name}}</span>.</h6>
                        <h6>{{$t('category_select_description')}} <span class="category">{{category.category_tab}}</span>.</h6>
                        <h6>{{$t('category_price_description')}} <span class="category">{{$t(category.price)}}</span>.</h6>
                        <h6>{{$t('category_capacity_description')}} <span class="category">{{category.capacity}}{{category.capacity_unit}}</span>.</h6>
                        <h6>{{$t('category_period_description')}} <span class="category">{{category.period_date}}{{$t('days')}}</span>.</h6>
                    </div>
                </div>
                <div class="division"></div>
                <div class="choose_payment_method">
                    <h4>{{$t('choose_payment_method_title')}}</h4>
                    <div class="row" style="padding-left: 20px;">
                        <div class="col-md-5">
                            <label class="col-form-label text-md-end">
                                <input type="radio" id="stripe" name="payment_method" checked/>
                                <img src="images/credit-payment-logo.png" />
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label text-md-end">
                                <input type="radio" id="paypal" name="payment_method" />
                                <img src="images/paypal-payment-logo.png" />
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="col-form-label text-md-end">
                            <input type="radio" id="transfer" name="payment_method" />
                                <img src="images/transfer-payment-logo.png" />
                            </label>
                        </div>
                    </div>
                </div>

                <!-- payment information form -->
                <form @submit.prevent="stripe_payment_post" method="post">
                    <div class="payment_information_form" style="padding-top: 15px;">
                        <h4>{{$t('payment_information_title')}}</h4>
                        <div style="padding-left: 20px;">
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label class="col-form-label">{{ $t('email') }}</label>
                                    <input v-model="email" class="form-control" type="email" name="email">
                                </div>
                                <div class="col-md-8">
                                    <label class="col-form-label">{{ $t('card_number') }}</label>
                                    <input v-model="card_number" class="form-control" type="text" name="card_number">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label class="col-form-label">{{ $t('expire_date') }}</label>
                                    <input v-model="expire_date" class="form-control" type="date" name="expire_date">
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label">{{ $t('cvc') }}</label>
                                    <input v-model="cvc" class="form-control" type="number" name="cvc">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-12 d-flex">
                                    <!-- Submit Button -->
                                    <b-button type="submit" variant="primary" :disabled="loading">
                                        <b-spinner small :hidden="!loading"></b-spinner>
                                        {{ $t('create') }}
                                    </b-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { mapGetters } from 'vuex'
import From from 'vform'
export default {
    data: () => ({
        category: '', 
        card_number: '',
        expire_date: '',
        cvc: '',
        loading: false
    }),
    methods: {
        async getCategorydata(app_id, cat_id) {
            const {data} = await axios.get('/api/get/checkout/category/'+app_id+'/'+cat_id)
            console.log(data);
            this.category = data;
        },
        async stripe_payment_post() {
            var {data} = await axios.post('/api/checkout/stripe/send', {
                email: this.email,
                price: this.category.price,
                card_number: this.card_number,
                expire_date: this.expire_date,
                cvc: this.cvc
            })
        }
    },
    created() {
        var app_id = this.$route.query.app_id;
        var cat_id = this.$route.query.cat_id;
        this.getCategorydata(app_id, cat_id)
        this.email = this.user.email
    },
    computed: mapGetters({
        user: 'auth/user'
    }),
    mounted() {
        this.email = user.email
    }
}
</script>

<style scoped>
    .header {
        width: 100%;
        background-color: #211F40;
        height: 150px;
    }
    .header h1 {
        padding-top: 3rem;
        text-align: center;
        color: #fff;
        font-weight: 600;
    }
    .content {
        width: 100%;
        padding-top: 50px;
    }
    .content .category_level h4,
    .content .choose_payment_method h4,
    .content .payment_information_form h4 {
        font-weight: 700;
        padding: 15px 0;
    }
    .content .category_level h6 {
        padding: 10px 0;
    }
    .content .category_level .change {
        display: inline;
        font-size: 12px;
        color: #007FED;
    }
    .content .category_level .category {
        display: inline;
        font-size: 15px;
        font-weight: 700;
    }
    .content .division {
        border-bottom: 1px solid #0000006e;
        padding: 5px 0;
    }
    .content .choose_payment_method label {
        display: flex;
    }
    .content .choose_payment_method label img {
        padding-left: 10px;
        display: inline;
        height: 55px;
    }

</style>