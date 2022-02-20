<template>
  <VueScrollFixedNavbar>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <router-link :to="{ name: $t('home.url') }" class="navbar-brand">
          <img :src="logo" />
        </router-link>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
          <span class="navbar-toggler-icon" />
        </button>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <!-- Authenticated -->
            <li v-if="user" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark"
                href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
              >
                <img :src="user.photo_url" class="rounded-circle profile-photo me-1">
                {{ user.name }}
              </a>
              <div class="dropdown-menu">
                <router-link :to="{ name: 'settings.profile' }" class="dropdown-item ps-3">
                  <fa icon="cog" fixed-width />
                  {{ $t('settings') }}
                </router-link>

                <div class="dropdown-divider" />
                <a href="#" class="dropdown-item ps-3" @click.prevent="logout">
                  <fa icon="sign-out-alt" fixed-width />
                  {{ $t('logout') }}
                </a>
              </div>
            </li>
            <!-- Guest -->
            <template v-else>
              <li class="nav-item">
                <router-link :to="{ name: $t('home.url') }" class="nav-link" active-class="active">
                  {{ $t('home.text') }}
                </router-link>
              </li>

              <li class="nav-item dropdown" @mouseover="productOver" @mouseleave="productLeave">
                <router-link :to="{ name: $t('products.url') }"  class="nav-link dropdown-toggle" active-class="active">
                  {{ $t('products.text') }}
                </router-link>
                <div class="dropdown-menu" :style="{ display: productShow ? 'block' : 'none' } ">
                  <router-link :to="{ name: $t('ias.url') }" class="nav-link dropdown-item">
                    {{ $t('ias.text') }}
                  </router-link>
                  <router-link :to="{ name: $t('flowcal.url') }" class="nav-link dropdown-item">
                    {{ $t('flowcal.text') }}
                </router-link>
                </div>
              </li>

              <li class="nav-item">
                <router-link :to="{ name: $t('purchase.url') }" class="nav-link" active-class="active">
                  {{ $t('purchase.text') }}
                </router-link>
              </li>

              <li class="nav-item">
                <router-link :to="{ name: $t('carrer.url') }" class="nav-link" active-class="active">
                  {{ $t('carrer.text') }}
                </router-link>
              </li>

              <li class="nav-item">
                <router-link :to="{ name: $t('contact.url') }" class="nav-link" active-class="active">
                  {{ $t('contact.text') }}
                </router-link>
              </li>

              <li class="nav-item">
                <router-link :to="{ name: $t('dealer.url') }" class="nav-link" active-class="active">
                  {{ $t('dealer.text') }}
                </router-link>
              </li>

              <!--<li class="nav-item">
                <router-link :to="{ name: 'login' }" class="nav-link" active-class="active">
                  {{ $t('login') }}
                </router-link>
              </li>-->

              <!--<li class="nav-item">
                <router-link :to="{ name: 'register' }" class="nav-link" active-class="active">
                  {{ $t('register') }}
                </router-link>
              </li>-->
            </template>
          </ul>

          <ul class="navbar-nav">
            <locale-dropdown />
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </VueScrollFixedNavbar>
</template>

<script>
import { VueScrollFixedNavbar } from "vue-scroll-fixed-navbar"
import { mapGetters } from 'vuex'
import LocaleDropdown from './LocaleDropdown'
import Logo from '~/assets/images/logo.png'

export default {
  components: {
    LocaleDropdown,
    VueScrollFixedNavbar
  },

  data: () => ({
    logo: Logo,
    fixed: false,
    productShow: false
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    },
    productOver() {
      this.productShow = true;
    },
    productLeave() {
      this.productShow = false;
    }
  }
}
</script>

<style scoped>
.navbar {
  font-weight: 500;
}
.kRFLgj .nav-item {
  padding: 0 7px;
  transition: all 0.3s cubic-bezier(.46,.03,.52,.96);
  padding-bottom: 10px
}
.kRFLgj .navbar-light .navbar-nav .nav-link {
    color: #007FED;
    font-size: 18px;
}
.kRFLgj .navbar-light .navbar-nav .nav-link:hover{
    color: #000;
}
.kRFLgj .navbar img {
    width: 80%;
    transition: all 0.3s cubic-bezier(.46,.03,.52,.96);
}
.kRFLgj .sticky .nav-item {
    transition: all 0.3s cubic-bezier(.46,.03,.52,.96);
    padding: 0 5px;
}
.kRFLgj .sticky .navbar img {
    width: 40%;
    transition: all 0.3s cubic-bezier(.46,.03,.52,.96);
}
.kRFLgj .sticky .bg-white {
    background-color:#007FED;
}
</style>


