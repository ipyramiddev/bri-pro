<template>
    <div class="container information">
      <div class="title">
        <h2>{{$t('homepage.info_title')}}</h2>
        <router-link :to="{name: $t('informations.url')}" class="infos_link_css">{{$t('homepage.infos_link_des')}}</router-link>
      </div>
      <div class="body row">
        <div v-for="info in informations" :key="info.id" class="body-pannel col-md-4 col-sm-12">
          <div class="pannel">
              <div class="head">
                  <h5>
                    <router-link :to="{name: 'information_detail_jp', query: {id: info.id, author: info.name}}">
                        {{info.title}}
                    </router-link>
                  </h5>
              </div>
              <div class="date">
                  <h6>{{info.created_at}}</h6>
              </div>
              <div class="content">
                  <h6>{{info.content}}</h6>
              </div>
              <div class="read">
                  <h6>
                      <router-link :to="{name: 'information_detail_jp', query: {id: info.id, author: info.name}}">
                          詳細を読む >>
                      </router-link>
                  </h6>
              </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    import axios from 'axios'
    
    export default{
        data: () => ({
            informations: '',
        }),
        methods: {
            async getInformations(lang) {
                var new_info_datas = await axios.get('/api/get/new_informations/'+lang)
                this.informations = new_info_datas.data
            }
        },
        created() {
            var lang = 'jp'
            this.getInformations(lang)
        }
    }
</script>

<style scoped>
.information {
  padding: 50px 0;
}
.information .title {
  text-align: center;
  padding: 40px 0;
}
.information .title .infos_link_css {
  padding-left: 5px;
  font-size: 12px;
  color: #007EFD;
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
  padding: 30px 16px 10px 16px;
}
.information .body .body-pannel .pannel .head h5 {
  line-height: 2rem;
  word-break: break-all;    
  padding: 0 25px; 
}
.information .body .body-pannel .pannel .content,
.information .body .body-pannel .pannel .read,
.information .body .body-pannel .pannel .date {
  padding: 10px 16px;
}
.information .body .body-pannel .pannel .content h6 {
  line-height: 1.5rem;
  padding: 10px 16px;
  word-break: break-all;     
}
.information .body .body-pannel .pannel .read {
  text-align: right;
}
.information .body .body-pannel .pannel .date {
  text-align: right;
}
</style>