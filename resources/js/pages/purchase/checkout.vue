<template>
    <div>
        <div class="header">
            <h1>{{$t('checkout.title')}}</h1>
        </div>
        <div class="container">
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        app_id: '',
        cat_id: ''
    }),
    created() {
        var app_id = this.$route.query.app_id;
        var cat_id = this.$route.query.cat_id;
        console.log(app_id)
        console.log(cat_id)
    }
}
</script>

<style scoped>
.header {
    width: 100%;
    background-color: #211F40;
    height: 150px;
}
.header h1 {
    padding-top: 3rem;
    text-align: center;
    color: #fff;
    font-weight: 600;
}
</style>