<template>
  <div>

    <!-- About advertisement pictures -->
    <AdsSection />

    <!-- About advertisement content -->
    <div class="container fields">
        <div class="row">
            <div class="col-md-6 col-sm-12">
              <CompanyGreeting />
              <CompanyHis />
            </div>
            <div class="col-md-6 col-sm-12">
              <CompanyWork />
            </div>
        </div>
    </div>

    <!-- Footer -->
    <Footer />
  </div>
</template>

<script>
import AdsSection from "~/components/jp/about/Ads";
import CompanyGreeting from "~/components/jp/about/CompanyGreeting";
import CompanyHis from "~/components/jp/about/CompanyHis";
import CompanyWork from "~/components/jp/about/CompanyWork";
import Footer from "~/components/Footer";
export default {
  components: {
    AdsSection,
    CompanyGreeting,
    CompanyHis,
    CompanyWork,
    Footer
}
};
</script>
