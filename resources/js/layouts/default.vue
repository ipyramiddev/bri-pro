<template>
  <div class="main-layout">
    <navbar />

    <div class="container-lg mt-4">
      <child />
    </div>

    <footerbar />
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import footerbar from '~/components/Foot'

export default {
  name: 'MainLayout',

  components: {
    Navbar,
    footerbar
  }
}
</script>

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
