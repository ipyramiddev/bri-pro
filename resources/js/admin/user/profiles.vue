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
            <div class="col-sm-9">
                <div class="profile_pan">
                    <div class="header-flex">
                        <div class="profile_header">
                            <h5>User profile</h5>
                        </div>
                    </div>
                    <div class="content-flex">
                        <!-- First Name -->
                        <div class="w-30">
                            <label class="col-form-label text-md-end">{{ $t('first_name') }}</label>
                            <input class="form-control" type="text" name="first_name" :value="profiledata.first_name" disabled>
                        </div>

                        <!-- Last Name -->                        
                        <div class="w-30">
                            <label class="col-form-label text-md-end">{{ $t('last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" :value="profiledata.last_name" disabled>
                        </div>

                        <!-- Name -->                        
                        <div class="w-30">
                            <label class="col-form-label text-md-end">{{ $t('name') }}</label>
                            <input class="form-control" type="text" name="name" :value="profiledata.name" disabled>
                        </div>
                    </div>
                    <div class="content-flex">
                        <!-- Organization -->
                        <div class="w-50">
                            <label class="col-form-label text-md-end">{{ $t('organization') }}</label>
                            <input class="form-control" type="text" name="organization" :value="profiledata.organization" disabled>
                        </div>

                        <!-- Department -->                        
                        <div class="w-50">
                            <label class="col-form-label text-md-end">{{ $t('deaprtment') }}</label>
                            <input class="form-control" type="text" name="deaprtment" :value="profiledata.deaprtment" disabled>
                        </div>
                    </div>
                    <div class="content-flex">
                        <!-- Email -->
                        <div class="w-50">
                            <label class="col-form-label text-md-end">{{ $t('email') }}</label>
                            <input class="form-control" type="text" name="email" :value="profiledata.email" disabled>
                        </div>

                        <!-- Moblie Phone -->                        
                        <div class="w-50">
                            <label class="col-form-label text-md-end">{{ $t('phone') }}</label>
                            <input class="form-control" type="text" name="phone" :value="profiledata.phone" disabled>
                        </div>
                    </div>
                    <div class="content-flex">
                        <!-- Country -->
                        <div class="w-50">
                            <label class="col-form-label text-md-end">{{ $t('country') }}</label>
                            <input class="form-control" type="text" name="country" :value="profiledata.country" disabled>
                        </div>

                        <!-- Zip Code -->                        
                        <div class="w-50">
                            <label class="col-form-label text-md-end">{{ $t('zip') }}</label>
                            <input class="form-control" type="text" name="zip" :value="profiledata.zip" disabled>
                        </div>
                    </div>
                    <div class="content-flex">
                        <!-- State/County -->
                        <div class="w-50">
                            <label class="col-form-label text-md-end">{{ $t('state') }}</label>
                            <input class="form-control" type="text" name="state" :value="profiledata.state" disabled>
                        </div>

                        <!-- Country City/Town -->                        
                        <div class="w-50">
                            <label class="col-form-label text-md-end">{{ $t('city') }}</label>
                            <input class="form-control" type="text" name="city" :value="profiledata.city" disabled>
                        </div>
                    </div>
                    <div class="content-flex">
                        <!-- Address 1 -->
                        <div class="w-100">
                            <label class="col-form-label text-md-end">{{ $t('address_1') }}</label>
                            <input class="form-control" type="text" name="address_1" :value="profiledata.address_1" disabled>
                        </div>
                    </div>
                    <div class="content-flex">
                        <!-- Address 2 -->
                        <div class="w-100">
                            <label class="col-form-label text-md-end">{{ $t('address_2') }}</label>
                            <input class="form-control" type="text" name="address_2" :value="profiledata.address_2" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <!-- photo pannel -->
            <div class="col-sm-3">
                <div class="photo_pan">                    
                    <div class="header-photo-flex">
                        <div class="photo_header">
                            <img :src="profiledata.photo_url ? profiledata.photo_url : user_image "/>
                        </div>
                    </div>
                    <form @submit.prevent="role_update">
                        <div class="content-flex">
                            <div class="w-100">
                                <label class="col-form-label text-md-end">{{ $t('role') }}</label>
                                <select class="form-control" name="role" :v-model="form.role">
                                    <option>{{profiledata.role}}</option>
                                    <option value="admin">{{$t('Admin')}}</option>
                                    <option value="customer">{{$t('Customer')}}</option>
                                    <option value="agency">{{$t('Agency')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="content-flex">
                            <div class="w-100">
                                <label class="col-form-label text-md-end">{{ $t('permission') }}</label>
                                <select class="form-control" name="permission" :v-model="form.permission">
                                    <option>{{profiledata.permission}}</option>
                                    <option value="approved">{{$t('Approve')}}</option>
                                    <option value="suspend">{{$t('Suspend')}}</option>
                                    <option value="deny">{{$t('Deny')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="content-flex">
                            <div class="w-100" style="text-align:center;">
                            <!-- Submit Button -->
                            <v-button :loading="form.busy">
                                {{ $t('update') }}
                            </v-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import Form from 'vform'
import axios from 'axios'
import user_image from '/images/default-avatar.png'
export default {
  props: {
    dataBackgroundColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
            form: new Form({
                role: '',
                permission: ''
            }),
            user_image: user_image,
            profiledata: ''
        };
  },
  created() {
        var user_id=this.$route.params.id
        this.getUserById(user_id)
  },
  methods: {      
    async getUserById (user_id) {
        const { data } = await axios.get('/api/get/user/'+user_id)
        this.profiledata = data
    },
    async role_update () {
        var user_id=this.$route.params.id
        const {result} = await axios.post('/api/user/role_update/'+user_id)
    }
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
    margin-top: 30px;
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
.profile_pan .content-flex {
    display: flex;
    justify-content: space-around;
    padding: 0 30px;
    padding-bottom: 20px;
}
.photo_pan .content-flex {
    display: flex;
    justify-content: space-around;
    padding: 0 10px;
    padding-bottom: 30px;
}
.profile_pan .content-flex label {
    font-size: 13px;
}
.w-30 {
    width: 33%;
    padding: 0 10px;
}
.w-50 {
    width: 50%;
    padding: 0 10px;
}
.w-100 {
    width: 100%;
    padding: 0 10px;
}
.photo_pan {
    margin-top: 50px;
}
.header-photo-flex {
    display: flex;
    justify-content: space-around;
    position: relative;
    top: -60px;
}
.photo_header {
    text-align: center;
}
.photo_header img {
    border-radius: 50%;
    width: 70%;
}
</style>
