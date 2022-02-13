<template>
    <div class="container features">
      <div class="title">
        <h2>Features of Product Group</h2>
      </div>
      <div class="body row">
        <div class="body-pannel col-md-3 col-sm-12">
          <div class="subimage">
            <b-icon icon="list-task"></b-icon>
          </div>
          <div class="subtitle">
            <h5>Cloud web app</h5>
          </div>
          <div class="content">
            <h6>You can easily perform remote work and remote discussions regardless of the OS.</h6>
          </div>
        </div>
        <div class="body-pannel col-md-3 col-sm-12">
          <div class="subimage">
            <b-icon icon="alarm-fill"></b-icon>
          </div>
          <div class="subtitle">
            <h5>Support various formats</h5>
          </div>
          <div class="content">
            <h6>We have the know-how to read and optimize different emtadata and ijformation for each manufacturer.</h6>
          </div>
        </div>
        <div class="body-pannel col-md-3 col-sm-12">
          <div class="subimage">
            <b-icon icon="phone"></b-icon>
          </div>
          <div class="subtitle">
            <h5>Support deep and machine learning</h5>
          </div>
          <div class="content">
            <h6>By supporting deep learning and machine learning, operations and procedures are very easy and highly accurate.</h6>
          </div>
        </div>
        <div class="body-pannel col-md-3 col-sm-12">
          <div class="subimage">
            <b-icon icon="pencil"></b-icon>
          </div>
          <div class="subtitle">
            <h5>Subscrition sale</h5>
          </div>
          <div class="content">
            <h6>The initial installation cost is reduced and it can be used with the latest version.</h6>
          </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.features {
  padding: 50px 0;
}
.features .title {
  text-align: center;
  padding: 40px 0;
}
.features .body .body-pannel {
  padding: 0.2rem 2.5rem;
}
.features .body .subtitle {
  padding: 0.3rem 0;
}
.features .body .subimage svg {
  fill: #007FED;
  width: 35px;
  height: 35px;
}
.features .body .subtitle >h5 {
  line-height: 1.4;
}
.features .body .content {
  padding: 0.1rem 0;
}
.features .body .content >h6 {
  line-height: 1.5;
}
</style>