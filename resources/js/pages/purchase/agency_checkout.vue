<template>
    <div>
        <div class="header">
            <h1>{{$t('checkout_title')}}</h1>
        </div>
        <div class="container">
            <div class="content">
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