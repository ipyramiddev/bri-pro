<template>
  <div>
    <Imageslider />

    <!--About section -->
    <Aboutsection />

    <!-- Fields of application -->
    <Fieldsection />
    
    <!--Features of Product Group -->
    <Featuresection />
  </div>
</template>

<script>
import Imageslider from '~/components/HomeImageSlider'
import Aboutsection from '~/components/en/home/About'
import Fieldsection from '~/components/en/home/Field'
import Featuresection from '~/components/en/home/Features'
export default {
  components: {
      Imageslider,
      Aboutsection,
      Featuresection,
      Fieldsection
  }
}
</script>

<style scoped>
.imageslider {
    width: 100%;
}
</style>
