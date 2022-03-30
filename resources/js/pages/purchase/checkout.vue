<template>
    <div>
        <div class="header">
            <h1>{{$t('checkout_title')}}</h1>
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
                        <h6>{{$t('category_period_description')}} <span class="category">{{category.period_date}} {{$t('days')}}</span>.</h6>
                    </div>
                </div>
                <div class="division"></div>
                <div class="choose_payment_method">
                    <h4>{{$t('choose_payment_method_title')}}</h4>
                    <div v-if="locale=='jp'" class="row" style="padding-left: 20px;">
                        <div class="col-md-6">
                            <label class="col-form-label text-md-end">
                                <input type="radio" id="paypal" name="payment_method" v-model="form_display" value="paypal" />
                                <img src="images/paypal-payment-logo.png" />
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="col-form-label text-md-end">
                            <input type="radio" id="furikomi" name="payment_method" v-model="form_display" value="furikomi" />
                                <img src="images/komoju-payment-logo.png" />
                            </label>
                        </div>
                    </div>
                    <div v-else class="row" style="padding-left: 20px;">
                        <div class="col-md-12">                            
                            <form @submit.prevent="paypal_payment_post" method="post">
                                <div class="payment_information_form" style="padding-top: 15px;">
                                    <div style="padding: 0 40px;">
                                        <div class="col-md-12 paypal-button">
                                            <!-- Submit Button -->
                                            <div ref="paypal"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- payment information form -->
                <!-- paypal payment -->
                <div v-if="locale=='jp'" id="paypal_payment"  v-show="form_display === 'paypal'">
                    <form @submit.prevent="paypal_payment_post" method="post">
                        <div class="payment_information_form" style="padding-top: 15px;">
                            <h4>{{$t('payment_information_title')}}</h4>
                            <div style="padding: 0 40px;">
                                <div class="col-md-12 paypal-button">
                                    <!-- Submit Button -->
                                    <div ref="paypal"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- furikomi payment -->
                <div id="furikomi_payment" v-if="locale=='jp'"  v-show="form_display === 'furikomi'">
                    <form @submit.prevent="furikomi_payment_post" method="post">
                        <div class="payment_information_form" style="padding-top: 15px;">
                            <h4>{{$t('payment_information_title')}}</h4>
                            <div style="padding-left: 20px;">
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label class="col-form-label">{{ $t('email') }}</label>
                                        <input v-model="customer.email" class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12 d-flex">
                                        <!-- Submit Button -->
                                        <b-button type="submit" variant="primary" :disabled="paymentProcessing">
                                            <b-spinner small :hidden="!paymentProcessing"></b-spinner>
                                            フリコミによるチェックアウト
                                        </b-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { mapGetters } from 'vuex'
import swal from 'sweetalert2/dist/sweetalert2.js'

export default {
    data: () => ({
        stripe: {},
        cardElement: {},
        customer: {
            name : '',
            email: '',
            //first_name: '',
            //last_name: '',
            //email: '',
            //address: '',
            //city: '',
            //state: '',
            //zip_code: ''
        },
        category: '',
        paymentProcessing: false,
        //payment form display
        form_display: 'paypal'
    }),
    mounted() {        
        //paypal button section
        const script = document.createElement("script")
        const ClientID = process.env.MIX_PAYPAL_SANDBOX_CLIENT_ID
        console.log(ClientID)

        script.setAttribute(`src`,`https://www.paypal.com/sdk/js?client-id=${ClientID}&currency=USD`)
        script.setAttribute(`data-namespace`,`paypal_sdk`)
        script.addEventListener("load", this.setLoaded)
        document.body.appendChild(script)
    },
    methods: {
        //paypal button
        setLoaded:function() {
            var user_id = this.user.id
            var amount = this.category.price
            paypal_sdk.Buttons({
                style: {
                    shape: 'pill',
                    label: 'checkout'
                },

                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{"amount":{"currency_code":"USD","value":amount}}]
                    });
                    console.log(data)
                },

                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(orderData) {
                        
                        // Full available details
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                        // Show a success message within this page, e.g.
                        const element = document.getElementById('paypal-button-container');
                        element.innerHTML = '';
                        element.innerHTML = '<h3>Thank you for your payment!</h3>';

                        // Or go to another URL:  actions.redirect('thank_you.html');
                        
                    });
                },

                onError: function(err) {
                console.log(err);
                }

            }).render(this.$refs.paypal)
        },

        async getCategorydata(app_id, cat_id) {
            const {data} = await axios.get('/api/get/checkout/category/'+app_id+'/'+cat_id)
            this.category = data;
        },
        async furikomi_payment_post() {
            this.paymentProcessing = true
            var {data} = await axios.post('/api/payment/furikomi/checkout/send', {
                email: this.customer.email,
                price: this.category.price
            })
            this.paymentProcessing = false
        }
    },
    created() {
        var app_id = this.$route.query.app_id;
        var cat_id = this.$route.query.cat_id;
        this.getCategorydata(app_id, cat_id)
        this.customer.name = this.user.name
        this.customer.email = this.user.email
        this.locale = this.$root.$i18n.locale
    },
    computed: mapGetters({
        user: 'auth/user'
    })
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
    .content .payment_information_form .paypal-button {
        display: flex;
        justify-content: space-around;
    }
    .content .payment_information_form .paypal-button div {
        width: 50%;
    }

</style>