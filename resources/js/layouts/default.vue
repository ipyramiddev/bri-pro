<template>
  <div class="main-layout">
<<<<<<< HEAD
    <!-- user frontend -->
    <div v-if="userFrontendShow===true">
      <navbar @user_admin="showchange" />
=======
    <navbar />
>>>>>>> parent of 6b2f303 (fix)

    <div class="container-lg mt-4 min-height">
      <child />
    </div>

<<<<<<< HEAD
    <!-- admin dashboard -->
    <dashboard v-else @user_admin="showchange" />

=======
    <footerbar />
>>>>>>> parent of 6b2f303 (fix)
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import footerbar from '~/components/Foot'
import dashboard from '~/admin/layout'

export default {
  name: 'MainLayout',

  components: {
    Navbar,
<<<<<<< HEAD
    footerbar,
    dashboard
  },
  data: () => ({
    userFrontendShow: ''
  }),
  methods: {
    showchange(value) {
      this.userFrontendShow = value
    }
  },
  created() {
    var pathname = window.location.pathname
    var path = pathname.split('/')
    if (path[1]=='admin'){
      this.userFrontendShow=false
    } else {
      this.userFrontendShow=true
    }
=======
    footerbar
>>>>>>> parent of 6b2f303 (fix)
  }
}
</script>

<style scoped>
.min-height {
  min-height: 500px;
}
</style>

<style>
.main-layout {
  background-color: #fff;
}
.container-lg {
  max-width: 100%;
  padding: 0 !important;
}
.mt-4 {
  margin-top: 0 !important;
}
</style>
