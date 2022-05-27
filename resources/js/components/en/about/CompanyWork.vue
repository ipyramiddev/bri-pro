<template>
    <div class="about">
        <div class="row">
            <h3 class="about intro">{{$t("about.buss_content")}}</h3>
        </div>
        <div class="row field">
            <div class="col-md-6 col-sm-12">
                <h3 class="about buss-title">{{$t("about.buss1")}}</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="image">
                            <img src="/images/about/life_analysis.png" class="full-width"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="buss-description">
                            {{$t("about.buss1_description")}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <h3 class="about buss-title">{{$t("about.buss2")}}</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="image">
                            <img src="/images/about/flow_cytometry.png" class="full-width"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="buss-description">
                            {{$t("about.buss2_description")}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row field">
            <div class="col-md-6 col-sm-12">
                <h3 class="about buss-title">{{$t("about.buss3")}}</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="image">
                            <img src="/images/about/next_gen.png" class="full-width"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="buss-description">
                            {{$t("about.buss3_description")}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <h3 class="about buss-title position-regulate">{{$t("about.buss4")}}</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="image">
                            <img src="/images/about/drone.png" class="full-width"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="buss-description">
                            {{$t("about.buss4_description")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.field {
    padding-top: 2rem;
}
.full-width {
    width: 100%;
}
.about .intro {
    border-left: 8px solid #00A1DA;
    padding-left: 1rem;
    color: #7F7F7F;
}
.about .name {
    text-align: center;
}
.intro-text {
    color: #7F7F7F;
    text-align: justify;
    text-justify: inter-word;
}
.position-regulate{
    padding-bottom:2rem;
}
.buss-title {
    color: #00A1DA;
}
.buss-description {
    color: #7F7F7F;
    font-size: 0.8rem;
}
</style>