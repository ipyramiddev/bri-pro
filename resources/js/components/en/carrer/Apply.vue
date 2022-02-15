<template>
    <div class="container apply">
      <div class="title">
        <h6>What Are You Looking For In Your Next Job</h6>
        <h2>Apply Now For Success</h2>
      </div>
      <div class="body row">
        <div class="col-md-3 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="First Name"></b-form-input>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="Last Name"></b-form-input>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="Email"></b-form-input>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="Phone"></b-form-input>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="City"></b-form-input>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="body-pannel">
            <b-form-select v-model="pos" :options="postext" class="form-select"></b-form-select>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="body-pannel">
            <b-form-input v-model="text" placeholder="Linkedin Profile URL"></b-form-input>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="body-pannel">
            <b-form-select v-model="edu" :options="edutext" class="form-select"></b-form-select>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="body-pannel">
            <b-form-textarea
             v-model="text" 
             placeholder="Personal Note" 
             rows="3" 
             max-rows="6"
            ></b-form-textarea>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="body-pannel" style="text-align:right;">
            <b-button variant="outline-primary">Submit</b-button>
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
.apply {
    padding: 50px 0;
}
.apply .title {
    text-align: center;
    padding: 40px 0;
}
.apply .title h6 {
    padding-top: 20px;
}
.apply .title h2 {
    padding-top: 20px;
    padding-bottom: 20px;
} 
.apply .body .body-pannel {
    padding: 10px;
} 
.apply .body .body-pannel .btn-outline-primary {
    border-radius: 5px;
    padding: 5px 25px;
} 
</style>