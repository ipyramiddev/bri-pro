<template>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h5>Life Analytics</h5>
                    <div class="content">
                        <span>Development and sales of Researches & Developments inspection products</span>
                        <span>support@lifeanalytics.org</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 style="padding:0 20px;">Sitemap</h5>
                    <div class="menu">
                        <router-link :to="{ name: 'home_en' }" class="nav-link" active-class="active">
                            {{ $t('home_en') }}
                        </router-link>
                        <router-link :to="{ name: 'products_en' }" class="nav-link" active-class="active">
                            {{ $t('products_en') }}
                        </router-link><a></a>
                        <router-link :to="{ name: 'purchase_en' }" class="nav-link" active-class="active">
                            {{ $t('purchase_en') }}
                        </router-link>
                        <router-link :to="{ name: 'carrer_en' }" class="nav-link" active-class="active">
                            {{ $t('carrer_en') }}
                        </router-link><a></a>
                        <router-link :to="{ name: 'contact_en' }" class="nav-link" active-class="active">
                            {{ $t('contact_en') }}
                        </router-link>
                        <router-link :to="{ name: 'dealer_en' }" class="nav-link" active-class="active">
                            {{ $t('dealer_en') }}
                        </router-link><a></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

.footer {
  padding: 30px 0;
  border-top:1px solid gainsboro;
}
.footer.row {
    margin: 0;
}
.footer .content{
  padding: 18px 0;
  line-height: 2rem
}
.footer .menu {
  padding: 10px 0;
  line-height: 2rem
}
.footer .content >span {
  font-size: 15px;
}
</style>
