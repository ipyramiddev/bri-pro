<template>
  <section class="imageslider">
    <Imageslider />
  </section>
</template>

<script>
import Imageslider from '~/components/HomeImageSlider'
export default {
  components: {
      Imageslider
  }
}
</script>

<style scoped>
.imageslider {
    width: 100%;
}
</style>
