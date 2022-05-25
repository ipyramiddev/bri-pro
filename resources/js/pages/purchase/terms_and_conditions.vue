<template>
    <div class="container">
        <div class="d-block text-center mt-5">
            <h3>{{$t('terms.title')}}</h3>
        </div>
        <div class="body row mt-5 text-justify">
            <div class="text">{{$t('terms.description')}}</div>
            <div class="article mt-3">
                <h5 class="subtitle">{{$t("terms.part1.title")}}</h5>
                <ol>
                    <li>
                        <h6 class="subtitle">{{$t("terms.part1.text1.title")}}</h6>
                        <p class="text">{{$t("terms.part1.text1.description")}}</p>
                    </li>
                    <li>
                        <h6 class="subtitle">{{$t("terms.part1.text2.title")}}</h6>
                        <p class="text">{{$t("terms.part1.text2.description")}}</p>
                    </li>
                </ol>
            </div>
            <div class="article">
                <h5 class="subtitle">{{$t("terms.part2.title")}}</h5>
                <p class="text">
                    {{$t("terms.part2.description1")}}<br/>
                    {{$t("terms.part2.description2")}}
                </p>
            </div>
            <div class="article">
                <h5 class="subtitle">{{$t("terms.part3.title")}}</h5>
                <ol>
                    <li>
                        <h6 class="subtitle">{{$t("terms.part3.text1.title")}}</h6>
                        <p class="text">{{$t("terms.part3.text1.description")}}</p>
                    </li>
                    <li>
                        <h6 class="subtitle">{{$t("terms.part3.text2.title")}}</h6>
                        <p class="text">{{$t("terms.part3.text2.description")}}</p>
                    </li>
                    <li>
                        <h6 class="subtitle">{{$t("terms.part3.text3.title")}}</h6>
                        <p class="text">{{$t("terms.part3.text3.description")}}</p>
                    </li>
                    <li>
                        <h6 class="subtitle">{{$t("terms.part3.text4.title")}}</h6>
                        <p class="text">{{$t("terms.part3.text3.description")}}</p>
                    </li>
                </ol>
            </div>
            <div class="article">
                <h5 class="subtitle">{{$t("terms.part4.title")}}</h5>
                <ol>
                    <li class="text">{{$t("terms.part4.text1")}}</li>
                    <li class="text">{{$t("terms.part4.text2")}}</li>
                    <li class="text">{{$t("terms.part4.text3")}}</li>
                    <li class="text">{{$t("terms.part4.text4")}}</li>
                </ol>
            </div>
            <div class="article">
                <h5 class="subtitle">{{$t("terms.part5.title")}}</h5>
                <p class="text">
                    {{$t("terms.part5.description1")}}<br/>
                    {{$t("terms.part5.description2")}}
                </p>
            </div>
            <div class="article">
                <h5 class="subtitle">{{$t("terms.part6.title")}}</h5>
                <p class="text">{{$t("terms.part6.description")}}</p>
            </div>
            <div class="article">
                <h5 class="subtitle">{{$t("terms.part7.title")}}</h5>
                <p class="text">
                    {{$t("terms.part7.description1")}}<br/>
                    {{$t("terms.part7.description2")}}
                </p>
            </div>
            <div class="article">
                <h5 class="subtitle">{{$t("terms.part8.title")}}</h5>
                <p class="text">{{$t("terms.part8.description")}}</p>
            </div>
            <div class="article">
                <h5 class="subtitle">{{$t("terms.part9.title")}}</h5>
                <p class="text">{{$t("terms.part9.description")}}</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .subtitle {
        text-transform: capitalize;
    }
    .container {
        width: 60%;
    }
</style>