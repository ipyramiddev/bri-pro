<template>
    <div class="container fields">
      <div class="body row">
        <div class="body no-padding col-md-6 col-sm-12">
          <div class="image">
            <img src="/images/about/ai.png" />
          </div>
          <div class="body ads-comment padding-down">
            <h5>{{$t('about.ads1')}}</h5>
          </div>
        </div>
        <div class="body no-padding col-md-6 col-sm-12">
          <div class="image">
            <img src="/images/about/cell.png" />
          </div>
          <div class="body ads-comment">
            <h5>{{$t('about.ads2')}}</h5>
          </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.fields {
  padding: 50px 0;
}
.ads-comment {
    background-color: #00A1DA;
    text-align: center;
    color: #FFFFFF;
}
.padding-down {
  padding-bottom: 1rem;
}
.fields .title {
  text-align: center;
  padding: 40px 0;
}
.fields .body .no-padding {
  padding: 0px;
}
.fields .body .subtitle {
  padding: 0.3rem 0;
  text-align: center;
}
.fields .body .subtitle >h5 {
  line-height: 1.4;
}
.fields .body .image >img {
    width: 100%;
}
</style>