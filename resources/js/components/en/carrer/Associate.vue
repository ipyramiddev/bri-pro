<template>
    <div class="container associate">
      <div class="title">
        <h6>Job Opportunities</h6>
        <h2>Become An Associate</h2>
      </div>
      <div class="body row">
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <div class="content">
                <h4>Business Development</h4>
                <h6>Experience in BtoB marketing, technical salse and pverseas sales in the fields of life science. medical care, and industry.</h6>
            </div>
            <div class="button">
                <b-button variant="outline-primary">Apply</b-button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <div class="content">
                <h4>Programmer</h4>
                <h6>Fronr and back experience, web application development experience required.</h6>
            </div>
            <div class="button">
                <b-button variant="outline-primary">Apply</b-button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <div class="content">
                <h4>Sales</h4>
                <h6>Experience in techical sales and sales in the fields of life science, medical care, amd industry.</h6>
            </div>
            <div class="button">
                <b-button variant="outline-primary">Apply</b-button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <div class="content">
                <h4>Salea Support</h4>
                <h6>You can work from home, such as resonding to customer inquiries via web chat, etc.</h6>
            </div>
            <div class="button">
                <b-button variant="outline-primary">Apply</b-button>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.associate {
    padding: 50px 0;
}
.associate .title {
    text-align: center;
    padding: 40px 0;
}
.associate .title h6 {
    padding-top: 20px;
}
.associate .title h2 {
    padding-top: 20px;
    padding-bottom: 20px;
}
.associate .body .col-md-6 {
    padding-top: 20px;
}
.associate .body .body-pannel {
    display: flex;
    justify-content: space-around;
    padding: 20px;
    min-height: 10rem;
    border-left: 2px solid #007FED;
    box-shadow: 0 1.5px 12px 2px rgba(45, 44, 44, 0.33);
    height: 100%;
    transition: 0.3S;
}
.associate .body .body-pannel:hover {
    box-shadow: 0 1.5px 12px 2px rgb(120, 140, 251);
}
.associate .body .body-pannel .content {
    padding-top: 5px 5px;
    width: 75%;
}
.associate .body .body-pannel .content h4 {
    padding: 10px 0;
}
.associate .body .body-pannel .button {
    padding-left: 5px;
    width: 20%;
    display: flex;
    align-items: center;
}
.associate .body .body-pannel .button .button-outline-primary {
  border-radius: 5px;
}
</style>