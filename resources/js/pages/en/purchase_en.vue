<template>
    <div class="container about">
        <div class="row">
            <div class="title col-md-4 col-sm-12">
                <div class="title">
                    Life Analytics
                </div>
                <div class="content">
                    <span>Development and sales of Researches & Developments inspection products</span>
                    <span>support@lifeanalytics.org</span>
                </div>
            </div>
            <div class="description col-md-8 col-sm-12">
                <div class="title">
                    Sitemap
                </div>
                <div class="menu">
                    <router-link :to="{ name: 'dealer_en' }" class="nav-link" active-class="active">
                        {{ $t('dealer_en') }}
                    </router-link><a></a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
