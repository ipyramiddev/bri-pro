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
}
</script>

<style scoped>

</style>