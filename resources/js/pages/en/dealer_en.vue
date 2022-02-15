<template>
    <div>
        <!-- Campaign Information -->        
        <div class="container campaign">
            <div class="title">
                <h2>Campaign Information</h2>
            </div>
            <div class="body row">
                <div class="text col-md-12 col-sm-12">
                    <h5>Information for argents, such as campaign information, will be included.</h5>
                </div>
            </div>
        </div>

        <!-- Brochure Information -->
        <div class="container brochure">
            <div class="title">
                <h2>Brochure Information</h2>
            </div>
            <div class="body row">
                <div class="text col-md-9 col-sm-12">
                    <h5>Brochure can be downloaded here.</h5>
                </div>
                <div class="button col-md-3 col-sm-12">
                    <b-button variant="outline-primary">Brochure here</b-button>
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
import IAS from '~/components/en/dealer-order/IAS'
import Flowcal from '~/components/en/dealer-order/Flowcal'

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
