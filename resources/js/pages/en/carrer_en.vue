<template>
    <div>
        <div class="header">
            <h6>Job Opennings</h6>
            <h1>Employment Information</h1>
        </div>
        <div class="container">
            <!-- Join us Today -->
            <div class="join">
                <h4>Join Us Today</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="title">
                            <span>The Right Place For You</span>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="content">
                            <h6>Lorem ipsum dolor sit amet, conetur adiping elit Lorem ipsum dolor sit amet, cons ectetur adipiscing elit Lorem ipsum dolor sit altmet, conse ctetur adipiscing elit aloma lomiur off </h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content">
                            <h6>silder tolos. Lorem ipsum dolor sitlor amet, conetur adiping elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Become An Associate -->
            <Associatesection />

            <!-- Apply Now For Success -->
            <Apllysection />
        </div>
    </div>
</template>

<script>
import Associatesection from '~/components/en/carrer/Associate'
import Apllysection from '~/components/en/carrer/Apply'

export default {
    components: {
        Associatesection,
        Apllysection
    }
}
</script>

<style scoped>
.header {
    width: 100%;
    background-color: #211F40;
    height: 150px;
}
.header h6 {
    padding-top: 2rem;
    text-align: center;
    color: #fff;
}
.header h1 {
    text-align: center;
    color: #fff;
    font-weight: 600;
}
.join {
    padding-top: 3rem;
}
.join h5 {
    padding: 1rem 1rem;
}
.join .title {
    border-left: 3px solid #007FED;
    height: 100%;
    padding-left: 10px
}
.join .title span {
    font-size: 30px;
    line-height: 2.5rem;
}
</style>