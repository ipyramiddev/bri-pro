<template>
    <div>
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

        <!-- IAS -->
        <IAS />

        <!-- Flowcal -->
        <Flowcal />
    </div>
</template>

<script>
import IAS from '~/components/jp/dealer-order/IAS'
import Flowcal from '~/components/jp/dealer-order/Flowcal'

export default {
    components: {
        IAS,
        Flowcal
    }
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
