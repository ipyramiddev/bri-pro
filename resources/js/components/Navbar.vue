<template>
  <VueScrollFixedNavbar>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <router-link :to="{ name: user ? 'home' : 'welcome' }" class="navbar-brand">
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
                <router-link :to="{ name: 'home_en' }" class="nav-link" active-class="active">
                  {{ $t('home_en') }}
                </router-link>
              </li>

              <!-- <li class="nav-item" @mouseover="onOver" @mouseleave="onLeave">
                <router-link :to="{ name: 'products_en' }" class="nav-link" active-class="active">
                  {{ $t('products_en') }}
                </router-link>
                <b-dropdown id="dropdown-1" text="Dropdown Button" ref="dropdown" class="hide m-md-2">
                  <b-dropdown-item>{{ $t('ias_en') }}</b-dropdown-item>
                  <b-dropdown-item>{{ $t('flowcal_en') }}</b-dropdown-item>
                </b-dropdown>
              </li> -->

              <li class="nav-item dropdown" @mouseover="onOver" @mouseleave="onLeave" ref="dropdown">
                <router-link :to="{ name: 'products_en' }"  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  active-class="active">
                  {{ $t('products_en') }}
                </router-link>
                <div class="dropdown-menu">
                  <router-link :to="{ name: 'ias_en' }" class="nav-link dropdown-item" active-class="active">
                  {{ $t('ias_en') }}
                  </router-link>
                  <router-link :to="{ name: 'flowcal_en' }" class="nav-link dropdown-item" active-class="active">
                    {{ $t('flowcal_en') }}
                </router-link>
                </div>
              </li>

              <div class="dropdown-menu">
                <router-link :to="{ name: 'ias_en' }" class="nav-link" active-class="active">
                  {{ $t('catalog_en') }}
                </router-link>
                <router-link :to="{ name: 'flowcal_en' }" class="nav-link" active-class="active">
                  {{ $t('catalog_en') }}
                </router-link>
              </div>

              <li class="nav-item">
                <router-link :to="{ name: 'purchase_en' }" class="nav-link" active-class="active">
                  {{ $t('purchase_en') }}
                </router-link>
              </li>

              <li class="nav-item">
                <router-link :to="{ name: 'carrer_en' }" class="nav-link" active-class="active">
                  {{ $t('carrer_en') }}
                </router-link>
              </li>

              <li class="nav-item">
                <router-link :to="{ name: 'contact_en' }" class="nav-link" active-class="active">
                  {{ $t('contact_en') }}
                </router-link>
              </li>

              <li class="nav-item">
                <router-link :to="{ name: 'dealer_en' }" class="nav-link" active-class="active">
                  {{ $t('dealer_en') }}
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
    fixed: false
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
    onOver() {
      this.$refs.dropdown.visible = true;
    },
    onLeave() {
      this.$refs.dropdown.visible = false;
    }
  }
}
</script>

<style scoped>
.kRFLgj .nav-item {
  padding: 0 10px;
    transition: all 0.3s cubic-bezier(.46,.03,.52,.96);
}
.kRFLgj .navbar-light .navbar-nav .nav-link {
    color: #007FED;
    font-size: 17px;
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


