<template>
    <div class="container comment">
        <div class="comment_title">
            <h5>{{$t('comment_title')}}</h5>
        </div>

        <!-- edit new comment -->
        <div v-if="user" >
            <form @submit.prevent="comment_post" method="post">
                <div class="col-md-12">
                    <label class="col-form-label">{{$t('comment')}}</label>
                    <div class="body-pannel">
                        <b-form-textarea 
                        type="text"
                        v-model="comment"            
                        rows="5" 
                        ></b-form-textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12" style="padding-top: 5px;">
                    <div class="body-pannel" style="text-align:right;">
                        <b-button type="submit" variant="primary" :disabled="loading">
                        <b-spinner small :hidden="!loading"></b-spinner>
                        {{$t('post_comment')}}
                        </b-button>
                    </div>
                </div>                
            </form>
        </div>
        <div v-else>
            <h6>In order to edit new comment, Please <router-link :to="{name: 'login'}">{{ $t('login') }}</router-link></h6>
        </div>

    </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import axios from 'axios'
    export default{
        props: {
            send_id: {type: Number, default: null}
        },
        data: () => ({
            comment: '',
            loading: false
        }),
        computed: mapGetters({
            user: 'auth/user'
        }),
        created() {
                console.log(this.send_id)
            var locale = this.$root.$i18n.locale
        },
        methods: {
            async comment_post(){
                var comments = await axios.post('/api/comment/post/', {
                    info_id: info_id,
                    comment: this.comment 
                })
            }
        }
    }
</script>

<style>
    .comment .comment_title {
        padding-top: 15px;
    }
</style>