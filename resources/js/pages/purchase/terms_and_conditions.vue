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
            </div>
            <div class="article">
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