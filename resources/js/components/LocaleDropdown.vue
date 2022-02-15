<template>
  <li v-if="Object.keys(locales).length > 1" class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button"
       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
    >
      {{ $t(locales[locale]) }}
    </a>
    <div class="dropdown-menu">
      <a v-for="(value, key) in locales" :key="key" class="dropdown-item" href="#"
         @click.prevent="setLocale(key)"
      >
        {{ $t(value) }}
      </a>
    </div>
  </li>
</template>

<script>
import { mapGetters } from 'vuex'
import { loadMessages } from '~/plugins/i18n'

export default {
  computed: mapGetters({
    locale: 'lang/locale',
    locales: 'lang/locales'
  }),

  methods: {
    setLocale (locale) {
      if (this.$i18n.locale !== locale) {
        loadMessages(locale)

        this.$store.dispatch('lang/setLocale', { locale })
      }
    }
  }
}
</script>

<style scoped>
.nav-item .nav-link {
    color: #007FED;
}
.nav-item .nav-link:hover {
    color: #000;
}
.dropdown-item:hover {
  color: #007FED;
}
</style>
