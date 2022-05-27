<template>
    <div class="about">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h3 class="about intro">{{$t("about.greeting")}}</h3>
                <p class="intro-text">{{$t("about.intro1")}}</p>
                <p class="intro-text">{{$t("about.intro2")}}</p>
                <p class="intro-text">{{$t("about.intro3")}}</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="image">
                    <img src="/images/about/ceo.png" class="about full-width"/>
                </div>
                <p class="about name">{{$t("about.ceo_name")}}</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
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
</style>