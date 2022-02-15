<template>
    <div class="container contact">
      <div class="title">
        <h1>Contact Us</h1>
      </div>
      <div class="body row">
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="Your Name"></b-form-input>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="Your E-mail"></b-form-input>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="Phone Number"></b-form-input>
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
             v-model="text" 
             placeholder="Your Text" 
             rows="3" 
             max-rows="6"
            ></b-form-textarea>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="body-pannel" style="text-align:right;">
            <b-button variant="outline-primary">Send</b-button>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            pos: null,
            postext: [
                {value: null, text: 'Position'},
                {value: 1, text: 'Laterl Attorney'},
                {value: 2, text: 'Products Liability Partner'},
                {value: 3, text: 'Partner in Real Estate'},
                {value: 4, text: 'Partner in Coporate'},
                {value: 5, text: 'Law Office Assistant'},
                {value: 6, text: 'Associate Attorney'},
                {value: 7, text: 'Corporate Attorney'}
            ],
            edu: null,
            edutext: [
                {value: null, text: "Education"},
                {value: 1, text: "Bachelor's Degree"},
            ]
        }
    }
}
</script>

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