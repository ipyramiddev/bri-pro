<template>
    <div class="container information">
      <div class="title">
        <h2>{{$t('homepage.info_title')}}</h2>
      </div>
      <div class="body row">
        <div class="body-pannel col-md-4 col-sm-12">
            <div class="pannel">
                <div class="head">
                    <h5>Additional function campaign with annual contract / Create additional image analysis tool for your function free of charge</h5>
                </div>
                <div class="content">
                    <h6>Life Analytics provides a cloud-based image analysis tool that utilizes AI.</h6>
                </div>
                <div class="read">
                    <a href="#">read more>></a>
                </div>
                <div class="date">
                    <h6>11/04/2021</h6>
                </div>
            </div>
             <div class="pannel">
                <div class="head">
                    <h5>We have been selected for Microsoft for Startups, a start-up support profram of Microsoft Corporation</h5>
                </div>
                <div class="content">
                    <h6>Promotion of technology urilization in collaboration with Microsoft Japan, improvement of service quality and development of new functions.</h6>
                </div>
                <div class="read">
                    <a href="#">read more>></a>
                </div>
                <div class="date">
                    <h6>11/04/2021</h6>
                </div>
            </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.information {
  padding: 50px 0;
}
.information .title {
  text-align: center;
  padding: 40px 0;
}
.information .body {
  padding: 20px 0;
}
.information .body .body-pannel {
  padding: 0.2rem 2.5rem;
}
.information .body .body-pannel .pannel {
  box-shadow: 0 1.5px 12px 2px rgba(0, 0, 0, 0.06);
  border-radius: 12px;
  height: 100%;
}
.information .body .body-pannel .pannel .head {
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
  padding: 20px 16px 10px 16px;
}
.information .body .body-pannel .pannel .head h5 {
    line-height: 1.5rem;
}
.information .body .body-pannel .pannel .content,
.information .body .body-pannel .pannel .read,
.information .body .body-pannel .pannel .date {
  padding: 10px 16px;
}
.information .body .body-pannel .pannel .content h6 {
  line-height: 1.5rem;
  padding: 10px 16px;
}
</style>