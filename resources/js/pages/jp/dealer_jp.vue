<template>
    <div>
        <!-- IF Authentification -->
        <div v-if="user">

            <div v-if="user.role=='customer'">
                <Alertsection />
            </div>

            <div v-else>
                <!-- Campaign Information -->        
                <div class="container campaign">
                    <div class="title">
                        <h2>{{$t('dealer.campaign_title')}}</h2>
                    </div>
                    <div class="body row">
                        <div class="text col-md-12 col-sm-12">
                            <h5>{{$t('dealer.campaign_con')}}</h5>
                        </div>
                    </div>
                </div>

                <!-- Brochure Information -->
                <div class="container brochure">
                    <div class="title">
                        <h2>{{$t('dealer.brochure_title')}}</h2>
                    </div>
                    <div class="body row">
                        <div class="text col-md-9 col-sm-12">
                            <h5>{{$t('dealer.brochure_con')}}</h5>
                        </div>
                        <div class="button col-md-3 col-sm-12">
                            <b-button variant="outline-primary">{{$t('dealer.brochure_button')}}</b-button>
                        </div>
                    </div>
                </div>

                <!-- IAS -->
                <IAS />

                <!-- Flowcal -->
                <Flowcal />
            </div>
        </div>

        <div v-else>
            <Loginsection :registername='false' />
        </div>        
    </div>
</template>

<script>
import IAS from '~/components/jp/dealer-order/IAS'
import Flowcal from '~/components/jp/dealer-order/Flowcal'
import Loginsection from '~/pages/auth/login'
import Alertsection from '~/components/Alert'
import {mapGetters } from 'vuex'

export default {
    components: {
        IAS,
        Flowcal,
        Loginsection,
        Alertsection
    },
    computed: mapGetters({
        user: 'auth/user'
    }),
}
</script>

<style scoped>
.campaign,
.brochure {
    padding: 20px 0;
}
.campaign .title,
.brochure .title {
    padding: 20px 0;
}
.campaign .body .text,
.brochure .body .text  {
    padding: 10px 0;
    padding-left: 30px;
}
.brochure .body .button .btn-outline-primary {
    padding: 6px 40px;
    border-radius: 5px;
    color: #fff;
    background-color: #007FED;
    transition: 0.2s;
}
.brochure .body .button .btn-outline-primary:hover {
    color: #007FED;
    background-color: #fff;
    transition: 0.2s;
}
</style>
