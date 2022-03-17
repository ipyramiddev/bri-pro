<template>
    <div class="container introduction">
      <div class="title">
        <h2>{{$t('homepage.intro_title')}}</h2>
      </div>
      <div class="body row" style="height: 20rem">
        <div class="text col-md-6 col-sm-12">
          <div class="subtitle">
            <h4>{{$t('homepage.intro_subtitle')}}</h4>
          </div>
          <div class="content">
            <h6>{{$t('homepage.intro_subcontent')}}</h6>
          </div>
          <div class="button">
            <b-button variant="outline-primary">{{ $t('subscribe') }}</b-button>
          </div>
        </div>
        <div class="video col-md-6 col-sm-12">
          <youtube :video-id="videoId" @ready="ready" @playing="playing" player-width="100%" player-height="100%"></youtube>
          <!-- <div data-id="fbbb76e" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/VYYqGkiKFkQ&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default"></div> -->
        </div>
      </div>
    </div>
</template>

<script>
  export default {
    data: () => ({
      videoId: 'videoId',
    }),
    methods: {
      ready (event) {
        this.player = event.target
      },
      palying (event) {
      },
      change () {
        this.videoId = this.$youtubr.getIdFromURL('https://youtu.be/VYYqGkiKFkQ')
      },
      stop () {
        this.player.stopVideo()
      },
      pause () {
        this.player.pauseVideo()
      }
    }
  }
</script>

<style scoped>
.introduction {
  padding: 50px 0;
}
.introduction .title {
  text-align: center;
  padding: 40px 0;
}
.introduction .body .text {
  padding: 0.2rem 2.5rem;
}
.introduction .body .subtitle {
  padding: 1rem 0;
}
.introduction .body .subtitle >h5 {
  line-height: 1.4;
}
.introduction .body .button {
  padding-top: 10px;
}
.introduction .body .button .btn-outline-primary {
  border-radius: 10px;
}
</style>