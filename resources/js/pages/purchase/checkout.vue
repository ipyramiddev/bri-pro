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
                    <div class="row" style="padding-left: 20px;">
                        <div class="col-md-5">
                            <label class="col-form-label text-md-end">
                                <input type="radio" id="stripe" name="payment_method" v-model="form_display" value="stripe" />
                                <img src="images/credit-payment-logo.png" />
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="col-form-label text-md-end">
                                <input type="radio" id="paypal" name="payment_method" v-model="form_display" value="paypal" />
                                <img src="images/paypal-payment-logo.png" />
                            </label>
                        </div>
                        <div v-if="locale=='en'" class="col-md-4">
                            <label class="col-form-label text-md-end">
                            <input type="radio" id="transfer" name="payment_method" v-model="form_display" value="transfer" />
                                <img src="images/transfer-payment-logo.png" />
                            </label>
                        </div>
                        <div v-if="locale=='jp'" class="col-md-4">
                            <label class="col-form-label text-md-end">
                            <input type="radio" id="furikomi" name="payment_method" v-model="form_display" value="furikomi" />
                                <img src="images/komoju-payment-logo.png" />
                            </label>
                        </div>
                    </div>
                </div>

                <!-- payment information form -->
                <!-- stripe payment -->
                <div id="stripe_payment" v-show="form_display === 'stripe'">
                    <div class="payment_information_form" style="padding-top: 15px;">
                        <h4>{{$t('payment_information_title')}}</h4>
                        <div style="padding-left: 20px;">
                            <div class="mb-3 row">
                                <div class="col-md-12">
                                    <label class="col-form-label">{{ $t('card_info') }}</label>
                                    <div id="card-element"></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-12 d-flex">
                                    <!-- Submit Button -->
                                    <b-button 
                                    @click="processPayment"
                                    variant="primary" 
                                    :disabled="paymentProcessing"
                                    >
                                        <b-spinner small :hidden="!paymentProcessing"></b-spinner>
                                        {{ paymentProcessing ? 'Processing' : $t('submit_stripe_checkout') }}
                                    </b-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- paypal payment -->
                <div id="paypal_payment"  v-show="form_display === 'paypal'">
                    <form @submit.prevent="paypal_payment_post" method="post">
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
                                        <div ref="paypal"></div>
                                        <!-- <b-button type="submit" variant="primary" :disabled="paymentProcessing">
                                            <b-spinner small :hidden="!paymentProcessing"></b-spinner>
                                            {{ $t('submit_paypal_checkout') }}
                                        </b-button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- transfer payment -->
                <div id="transfer_payment" v-if="locale=='en'"  v-show="form_display === 'transfer'">
                    <form @submit.prevent="transfer_payment_post" method="post">
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
                                            Check out by bank transfer
                                        </b-button>
                                    </div>
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
import { loadStripe } from '@stripe/stripe-js'
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
        form_display: 'stripe'
    }),
    async mounted() {

        //stripe payment field
        console.log(process.env.MIX_STRIPE_KEY)
        this.stripe = await loadStripe(process.env.MIX_STRIPE_KEY)
        console.log(stripe)

        const elements = this.stripe.elements()
        console.log(elements)
        this.cardElement = elements.create('card', {
            classes: {
                base: 'bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 p-3 leading-8 transition-colors duration-200 ease-in-out'
            }
        })

        this.cardElement.mount('#card-element')

        //payapl button section
        //let paypal
        //const ClientID = process.env.MIX_PAYPAL_SANDBOX_CLIENT_ID
        //console.log(ClientID)
        //paypal = await loadScript({ "client-id": "ClientID", currency: "USD"})
        //if (paypal) { 
        //    this.mountpaypalbutton(paypal)
        //} else {
        //    console.log("error")
        //}
    },
    mounted() {        
        //paypal button section
        const script = document.createElement("script")
        const ClientID = process.env.MIX_PAYPAL_SANDBOX_CLIENT_ID
        console.log(ClientID)

        script.setAttribute(`src`,`https://www.paypal.com/sdk/js?client-id=${ClientID}&currency=USD`)
        script.setAttribute(`data-namespace`,`paypal_adk`)
        script.addEventListener("load", this.setLoaded)
        document.body.appendChild(script)
    },
    methods: {
        //paypal button
        setLoaded:function() {
            paypal.Buttons({
                createOrder: async function(data, actions) {
                    await axios.post('/api/payment/paypal/order/create', {
                        user_id: this.user.id,
                        amount: this.category.price
                    }).then((response) => {
                        console.log(response.json())
                        return response.json()
                    }).then((orderData) => {
                        console.log(orderData)
                        return orderData.id
                    }).catch((error) => {
                        console.log(error)
                    })
                },
                onApprove: async function(data, actions) {
                    await axios.post('/api/payment/paypal/order/capture', {
                        orderID: data.orderID,
                        payment_gateway_id: document.getElementById('#paypalId').value(),
                        user_id: this.user.id,
                    }).then((response) => {
                        console.log(response.json())
                        return response.json()
                    }).then((orderData) => {
                        //Successful capture! For demo purchase:
                        console.log('Capture result', orderData, Json.stringify(orderData, null, 2))
                        var transaction = orderData.purchase_unit[0].payments.captures[0]
                        iziToast.success({
                            title: 'Success',
                            message: 'Payment completed',
                            position: 'topRight'
                        })
                    }).catch((error) => {
                        console.log(error)
                    })
                }
            }).render(this.$refs.paypal)
        },

        async getCategorydata(app_id, cat_id) {
            const {data} = await axios.get('/api/get/checkout/category/'+app_id+'/'+cat_id)
            this.category = data;
        },
        
        //card stripe payment
        async processPayment() {
            this.paymentProcessing = true

            const {paymentMethod, error} = await this.stripe.createPaymentMethod(
                'card', this.cardElement, {
                    billing_details: {
                        name: this.customer.name,
                        email: this.customer.email
                    }
                }
            )

            if (error) {
                this.paymentProcessing = false
                console.error(error)
                swal.fire({
                    icon: 'warning',
                    title: this.$t('warningTitle'),
                    text: this.$t('warningText'),
                    reverseButtons: true,
                    confirmButtonText: this.$t('ok'),
                    cancelButtonText: this.$t('cancel')
                })
            } else {
                console.log(paymentMethod);
                this.customer.payment_method_id = paymentMethod.id;
                this.customer.amount = this.category.price

                axios.post('/api/payment/creditcard/checkout/send', this.customer)
                    .then((response) => {
                        this.paymentProcessing = false;
                        console.log(response);

                        //this.$store.commit('updateOrder', response.data);
                        //this.$store.dispatch('clearCart');

                        //this.$router.push({ name: 'order.summary' });
                    })
                    .catch((error) => {
                        this.paymentProcessing = false;
                        console.error(error);
                    });
            }
        },
        async paypal_payment_post() {
            this.paymentProcessing = true
            var {data} = await axios.post('/api/payment/paypal/checkout/send', {
                email: this.email,
                price: this.category.price
            })
            this.paymentProcessing = false
        },
        async transfer_payment_post() {
            this.paymentProcessing = true
            var {data} = await axios.post('/api/payment/transfer/checkout/send', {
                email: this.email,
                price: this.category.price
            })
            this.paymentProcessing = false
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

</style>