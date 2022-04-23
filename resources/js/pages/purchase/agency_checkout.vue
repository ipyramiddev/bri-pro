<template>
    <div>
        <div class="header">
            <h1>{{$t('checkout_title')}}</h1>
        </div>
        <div class="container">
            <div class="content">
                <div class="category_level">
                    <h4>{{$t('category_level')}} <router-link class="change" :to="{name: $t('dealer.url')}">{{$t('change')}}</router-link></h4>
                    <div style="padding-left: 20px;">
                        <h6>
                            {{$t('category_application_description')}} 
                            <span class="category">{{category.app_name}}</span>.
                        </h6>
                        <h6>
                            {{$t('category_select_description')}} 
                            <span class="category">{{category.category_tab}}</span>.
                        </h6>
                        <h6>
                            {{$t('category_price_description')}} 
                            <span class="category">{{$t(category.price)}}</span>.
                        </h6>
                        <h6 style="color: #007FED;">
                            {{$t('category_discount_price_description')}}
                            {{$t('category_discount_rate_description')}} 
                            <span class="category">{{$t(category.discount)}}%</span>, 
                            {{$t('category_discounted_price_description')}} 
                            <span class="category">{{$t(category.discount_price)}}</span>.
                        </h6>
                        <h6>
                            {{$t('category_capacity_description')}} 
                            <span class="category">
                                {{category.capacity}}{{category.capacity_unit}}
                            </span>.
                        </h6>
                        <h6>
                            {{$t('category_period_description')}} 
                            <span class="category">{{category.period_date}} {{$t('days')}}</span>.
                        </h6>
                    </div>
                </div>

                <!-- Your Information -->                
                <div class="your_information_detail">
                    <h4>{{$t('your_information_details')}}</h4>
                    <div style="padding-left: 20px;">
                        <h6>
                            {{$t('your_email_address_des')}} 
                            <span class="information_detail">{{user.email}}</span>.
                        </h6>
                        <h6>
                            {{$t('your_deposit_amount')}} 
                            <span class="information_detail"></span>.
                        </h6>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { mapGetters } from 'vuex'
export default {
    data: () => ({
        category: '', 
        card_number: '',
        expire_date: '',
        cvc: '',
        loading: false,
    }),
}
</script>

<style scoped>

</style>