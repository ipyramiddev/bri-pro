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
        <div class='content'>
            <div class='md-layout'>
                <div class="md-layout-item md-medium-size-100 md-size-66">
                    <form>
                        <md-card>
                        <md-card-header :data-background-color="dataBackgroundColor">
                            <h4 class="title">Edit Profile</h4>
                            <p class="category">Complete your profile</p>
                        </md-card-header>

                        <md-card-content>
                            <div class="md-layout">
                            <div class="md-layout-item md-small-size-100 md-size-33">
                                <md-field>
                                <label>Company (disabled)</label>
                                <md-input v-model="disabled" disabled></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-small-size-100 md-size-33">
                                <md-field>
                                <label>User Name</label>
                                <md-input v-model="username" type="text"></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-small-size-100 md-size-33">
                                <md-field>
                                <label>Email Address</label>
                                <md-input v-model="emailadress" type="email"></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-small-size-100 md-size-50">
                                <md-field>
                                <label>First Name</label>
                                <md-input v-model="firstname" type="text"></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-small-size-100 md-size-50">
                                <md-field>
                                <label>Last Name</label>
                                <md-input v-model="lastname" type="text"></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-small-size-100 md-size-100">
                                <md-field>
                                <label>Adress</label>
                                <md-input v-model="address" type="text"></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-small-size-100 md-size-33">
                                <md-field>
                                <label>City</label>
                                <md-input v-model="city" type="text"></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-small-size-100 md-size-33">
                                <md-field>
                                <label>Country</label>
                                <md-input v-model="country" type="text"></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-small-size-100 md-size-33">
                                <md-field>
                                <label>Postal Code</label>
                                <md-input v-model="code" type="number"></md-input>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-size-100">
                                <md-field maxlength="5">
                                <label>About Me</label>
                                <md-textarea v-model="aboutme"></md-textarea>
                                </md-field>
                            </div>
                            <div class="md-layout-item md-size-100 text-right">
                                <md-button class="md-raised md-success">Update Profile</md-button>
                            </div>
                            </div>
                        </md-card-content>
                        </md-card>
                    </form>
                </div>
                <div class="md-layout-item md-medium-size-100 md-size-33">
                    <md-card class="md-card-profile">
                        <div class="md-card-avatar">
                        <img class="img" />
                        </div>

                        <md-card-content>
                        <h6 class="category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">Alec Thompson</h4>
                        <p class="card-description">
                            Don't be scared of the truth because we need to restart the human
                            foundation in truth And IOyou like Kanye loves Kanye IORick
                            Owens’ bed design but the back is...
                        </p>
                        <md-button class="md-round md-success">Follow</md-button>
                        </md-card-content>
                    </md-card>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
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
};
</script>
<style></style>
