<template>
    <div class="container fields">
      <div class="title">
        <h2>Fields of Application</h2>
      </div>
      <div class="body row">
        <div class="body-pannel col-md-3 col-sm-12">
          <div class="subtitle">
            <h5>Life Science</h5>
          </div>
          <div class="image">
            <img src="/images/applications/life science.jpeg" />
          </div>
        </div>
        <div class="body-pannel col-md-3 col-sm-12">
          <div class="subtitle">
            <h5>Medical</h5>
          </div>
          <div class="image">
            <img src="/images/applications/medical.png" />
          </div>
        </div>
        <div class="body-pannel col-md-3 col-sm-12">
          <div class="subtitle">
            <h5>Industrial</h5>
          </div>
          <div class="image">
            <img src="/images/applications/industrial.jpg" />
          </div>
        </div>
        <div class="body-pannel col-md-3 col-sm-12">
          <div class="subtitle">
            <h5>Drone</h5>
          </div>
          <div class="image">
            <img src="/images/applications/drone.png" />
          </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.fields {
  padding: 30px 0;
}
.fields .title {
  text-align: center;
  padding: 10px 0;
}
.fields .body .body-pannel {
  padding: 0.2rem 2.5rem;
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