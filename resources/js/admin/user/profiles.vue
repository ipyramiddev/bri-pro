<template>
    <div>        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">profile</h1>
            <router-link class="btn btn-secondary btn-icon-split" :to="{name: 'admin.users'}">
              <span class="text">Back</span>
              <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
              </span>
            </router-link>
        </div>

        <!-- Page body -->
        <div class="row" style="margin-bottom: 20px;">
            <!-- profile pannel -->
            <div class="col-sm-8">
                <div class="profile_pan">
                    <div class="header-flex">
                        <div class="profile_header">
                            <h5>User profile</h5>
                        </div>
                    </div>
                    <div class="content-flex">

                    </div>
                </div>
            </div>
            <!-- photo pannel -->
            <div class="col-sm-4">
                <div class="photo_pan">
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import axios from 'axios'
export default {
  props: {
    dataBackgroundColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      username: null,
      disabled: null,
      emailadress: null,
      lastname: null,
      firstname: null,
      address: null,
      city: null,
      country: null,
      code: null,
      aboutme:
        "Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.",
    };
  },
  created() {
        var user_id=this.$route.params.id
        this.getUserById(user_id)
  },
  methods: {      
    async getUserById (user_id) {
        const { data } = await axios.get('/api/get/user/'+user_id)
        console.log(data)
    },
  }
};
</script>
<style>
.profile_pan,
.photo_pan {
    background-color: #fff;
    min-height: 200px;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    border-radius: 5px;
    margin-top: 20px;
}
.header-flex {
    display: flex;
    justify-content: space-around;
    position: relative;
    top: -15px;
}
.profile_header {
    background-color: #0d6efd;
    border-radius: 3px;
    width: 95%;
    min-height: 30%;
    text-align: left;
}
.profile_header h5 {
    padding: 10px 0 10px 10px;
    color: #fff;
}
</style>
