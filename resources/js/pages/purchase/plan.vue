<template>
    <div>
        <div class="header">
            <h1>{{$t('ias.plan')}}</h1>
        </div>
        <div class="container">
            <div class="content">
                <div class="category_level">
                    <h3>
                        {{category.app_name}} {{$t('ias.plan')}}<span style="padding-left: 20px; font-size: 24px">{{$t(category.price)}}</span><span class="float-right">{{$t(category.price)}}</span>
                    </h3>
                </div>
                <div style="padding-left: 20px; padding-top: 30px">
                    <h5>{{$t('terms_and_conditions')}} <b-button variant="outline-secondary">{{$t('here')}}</b-button></h5>
                </div>
                <div class="payment_method">
                    <h4>{{$t('payment_method')}}</h4>
                    <div class="form-group">
                        <b-button variant="outline-secondary" id="bank_transfer">{{$t('bank_transfer')}}</b-button>
                        <b-button variant="outline-secondary" id="david_card">{{$t('david_card')}}</b-button>
                        <b-button variant="outline-secondary" id="paypal">{{$t('paypal')}}</b-button>
                        <b-button variant="outline-secondary" id="amazon_pay">{{$t('amazon_pay')}}</b-button>
                        <b-button variant="outline-secondary" id="credit_card">{{$t('credit_card')}}</b-button>
                    </div>
                </div>
                <div class="form-group float-right">
                    <b-button variant="outline-secondary" :to="{name: $t('purchase.url')}">{{$t('back')}}</b-button>
                    <b-button variant="outline-secondary" id="subscribe">{{$t('subscribe')}}</b-button>
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
        category: '',
        paymentProcessing: false,
    }),
    mounted() {      
        //paypal button section
        const script_paypal = document.createElement("script")
        const ClientID = process.env.MIX_PAYPAL_SANDBOX_CLIENT_ID
        console.log(ClientID)

        script_paypal.setAttribute(`src`,`https://www.paypal.com/sdk/js?client-id=${ClientID}&currency=USD`)
        script_paypal.setAttribute(`data-namespace`,`paypal_sdk`)
        script_paypal.addEventListener("load", this.setLoaded)
        document.body.appendChild(script_paypal)

        //komoju payment button
        const script_komoju = document.createElement("script")

        script_komoju.setAttribute(`src`, `https://multipay.komoju.com`)
        document.body.appendChild(script_komoju)

        console.log(script_komoju)

        console.log("komoju_button") 

        var payForm = document.getElementById("komoju-form") 
        var amount = this.amount
        const komoju_pu_key = 'pk_9e17c1ee95a8ca65eafbca819189907a6d0ebd0c'

        console.log(komoju_pu_key)
        console.log(amount)
        
        var handler = Komoju.multipay.configure({
            key: komoju_pu_key,
            token: function(token) {
                console.log("this is komoju token")
                console.log(token.id)
                this.komojuToken = token.id
                this.komoju_purchase()
            }
        })

        document.getElementById("credit_card").addEventListener("click", function(e) {
            console.log("komoju button click")
            handler.open({
                amount: amount,
                endpoint: "https://komoju.com",
                currency: "JPY",
                methods: [
                    "credit_card"
                    ],
            });
            e.preventDefault();
        });
    },
    methods: {
        async komoju_purchase() { 
            
            console.log("komoju button successful pass") 

            var user_id = this.user.id
            var app_id = this.category.id
            var amount = this.amount
            var router = this.$router
            var token = this.komojuToken

            var querystring = require('querystring')
            //var https = require('https')
            var secret_key = 'sk_123456'
            var auth = 'Basic ' + Buffer.from(secret_key + ':').toString('base64')

            var komoju_post_data = querystring.stringify({
                'amount': amount,
                'currency': 'JPY',
                'payment_details': token
            })

            console.log(komoju_post_data)

            var post_options = {
                host: 'komoju.com',
                port: '443',
                path: '/api/v1/payments',
                method: 'POST',
                headers: {
                    'Authorization': auth,
                    'Content-Length': Buffer.byteLength(komoju_post_data)
                }
            }
            console.log("komoju post option success")

            var post_req = axios.request(post_options, function(res) {
                res.setEncoding('utf8')
                res.on('data', function (chunk) {
                    console.log(chunk)
                })
            })          
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
        this.amount = this.$route.query.amount;
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

</style>