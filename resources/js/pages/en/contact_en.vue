<template>
    <div class="container contact">
      <div class="title">
        <h1>{{$t('contact.title')}}</h1>
      </div>
      <div class="body row">
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <b-form-input :placeholder="$t('contact.your_name')"></b-form-input>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <b-form-input :placeholder="$t('contact.your_email')"></b-form-input>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <b-form-input :placeholder="$t('contact.phone_number')"></b-form-input>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <b-form-file></b-form-file>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="body-pannel">
            <b-form-textarea             
             :placeholder="$t('contact.your_text')" 
             rows="3" 
             max-rows="6"
            ></b-form-textarea>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="body-pannel" style="text-align:right;">
            <b-button variant="outline-primary">{{$t('send')}}</b-button>
          </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.contact {
    padding: 20px 0;
}
.contact .title {
    text-align: center;
    padding: 20px 0;
}
.contact .title h1 {
    padding-top: 40px;
    padding-bottom: 20px;
    font-weight: 600;
} 
.contact .body .body-pannel {
    padding: 10px;
} 
.contact .body .body-pannel .btn-outline-primary {
    border-radius: 5px;
    padding: 5px 25px;
} 
</style>