<template>
    <div class="about">
        <div class="row field">
            <div class="col-md-6 col-sm-12">
                <h3 class="about intro main-text">{{$t("about.title1")}}</h3>
                <table class="company-data">
                    <colgroup>
                        <col class="twenty" />
                        <col class="eighty" />
                    </colgroup>
                    <tr>
                        <td>{{$t("about.company_name1")}}</td>
                        <td>{{$t("about.company_name2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.ceo_name1")}}</td>
                        <td>{{$t("about.ceo_name2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.location1")}}</td>
                        <td>{{$t("about.location2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.tel1")}}</td>
                        <td>{{$t("about.tel2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.url1")}}</td>
                        <td>{{$t("about.url2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.start_day1")}}</td>
                        <td>{{$t("about.start_day2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.start_money1")}}</td>
                        <td>{{$t("about.start_money2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.count1")}}</td>
                        <td>{{$t("about.count2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.business_desc1")}}</td>
                        <td>{{$t("about.business_desc2")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.customer1")}}</td>
                        <td>{{$t("about.customer2")}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6 col-sm-12">
                <h3 class="about intro main-text">{{$t("about.title2")}}</h3>
                <table class="company-data">
                    <tr>
                        <td>{{$t("about.his1_key")}}</td>
                        <td>{{$t("about.his1_val")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.his2_key")}}</td>
                        <td>{{$t("about.his2_val")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.his3_key")}}</td>
                        <td>{{$t("about.his3_val")}}</td>
                    </tr>
                    <tr>
                        <td>{{$t("about.his4_key")}}</td>
                        <td>{{$t("about.his4_val")}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<style scoped>
.field {
    margin-bottom: 20px;
}
.fullwidth {
    width: 100%;
}
.about .intro {
    border-left: 8px solid #00A1DA;
    padding-left: 1rem;
}
.main-text {
    color: #7F7F7F;
}
.about .name {
    text-align: center;
}
.company-data, td {
    border: collapse;
    border: 2px solid #D9D9D9;
    font-size: 15px;
    color: #8C8C8C;
}
td {
    /* border-spacing: 10px; */
    padding: 3px;
}
tr:nth-child(even) {
    text-align: justify;
    text-justify: inter-word;
}
.table {
    width: 100%;
    table-layout: fixed;
}
.twenty {
    width: 30%;
}
.eighty {
    width: 70%;
}
</style>