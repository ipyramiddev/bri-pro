<template>
    <div>
        <div class="header">
            <div class="container title">
                <h1>{{detail_data.title}}</h1>
            </div>
        </div>
        <div class="container content">
            <div class="detail_des">
                <h6>You are here:
                    <router-link :to="{ name: $t('home.url') }" style="display: inline">
                        {{$t('home.text')}}
                    </router-link>/
                    <router-link :to="{name: $t('informations.url')}" style="display: inline">
                        New Informations
                    </router-link>
                    / {{detail_data.title}}
                </h6>
            </div>
            <div class="detail_content">
                <div class="detail_date">
                    <h6>{{detail_data.created_at}} by <a href="#"><i>{{author}}</i></a></h6>
                </div>
                <div class="detail_content">
                    <h5>{{detail_data.content}}</h5>
                </div>
            </div>  
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    import { mapGetters } from 'vuex'
    
    export default{
        data: () => ({
            detail_data: '',
            author: '',
        }),
        methods: {
            async getInfoDetailData(id) {
                var info_detail_data = await axios.get('/api/get/information/detail/'+id)
                this.detail_data = info_detail_data.data
            }
        },
        computed: mapGetters({
            user: 'auth/user'
        }),
        created() {
            var id = this.$route.query.id
            this.author = this.$route.query.author
            this.getInfoDetailData(id)
        }
    }
</script>

<style scoped>
    .header {
        width: 100%;
        background-color: #211F40;
    }
    .header .title h1 {
        padding: 3rem 0;
        text-align: center;
        color: #fff;
        font-weight: 600;
        word-break: break-all;   
    }
    .container.title {
        width: 50%
    }
    .container.content {
        width: 80%;
    }
    .content .detail_des {
        padding: 10px 0;
    }
    .content .detail_content {
        padding-top: 30px;
    }
    .content .detail_content .pannels .pannel .info_title {
        text-align: center; 
        padding: 20px 5px 10px 5px;       
    }    
    .content .datas .pannels .pannel .info_title h5 {
        word-break: break-all;     
    }  
    .content .detail_content .detail_date {
        text-align: left; 
        padding: 10px 5px 10px 20px;       
    }
    .content .detail_content .detail_content {
        text-align: left; 
        padding: 10px 5px;       
    }
    .content .detail_content .detail_content h5 {
        word-break: break-word;
        white-space: break-spaces;
        display: inline-block  
    }
</style>