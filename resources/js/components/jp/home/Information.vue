<template>
    <div class="container information">
      <div class="title">
        <h2>{{$t('homepage.info_title')}}</h2>
      </div>
      <div class="body row">
        <div class="body-pannel col-md-4 col-sm-12">
            <div class="pannel">
                <div class="head">
                    <h5>横浜ビジネスグランプリ2022にて優秀賞を獲得しました</h5>
                </div>
                <div class="content">
                    <h6>横浜市が主催のビジネスピッチコンテストにて優秀賞を受賞しました</h6>
                </div>
                <div class="read">
                    <a href="03152022jp.vue">read more>></a>
                </div>
                <div class="date">
                    <h6>03/15/2022</h6>
                </div>
            </div>
        </div>
        <div class="body-pannel col-md-4 col-sm-12">
            <div class="pannel">
                <div class="head">
                    <h5>年間契約で機能追加キャンペーン /ご機能の画像解析ツールを無償で追加作成</h5>
                </div>
                <div class="content">
                    <h6>Life Analytics では，AI を活用したクラウド型画像解析ツールを提供しています．</h6>
                </div>
                <div class="read">
                    <a href="11052021jp.vue">read more>></a>
                </div>
                <div class="date">
                    <h6>11/05/2021</h6>
                </div>
            </div>
        </div>
        <div class="body-pannel col-md-4 col-sm-12">
            <div class="pannel">
                <div class="head">
                    <h5>マイクロソフト社のスタートアップ支援プログラム「Microsoft for Startups」に採択されました</h5>
                </div>
                <div class="content">
                    <h6>〜日本マイクロソフト社との協業でテクノロジー活用を推進、サービス品質向上や新機能を開発〜</h6>
                </div>
                <div class="read">
                    <a href="11032021jp.vue">read more>></a>
                </div>
                <div class="date">
                    <h6>11/03/2021</h6>
                </div>
            </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.information {
  padding: 50px 0;
}
.information .title {
  text-align: center;
  padding: 40px 0;
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
  padding: 20px 16px 10px 16px;
}
.information .body .body-pannel .pannel .head h5 {
    line-height: 1.5rem;
}
.information .body .body-pannel .pannel .content,
.information .body .body-pannel .pannel .read,
.information .body .body-pannel .pannel .date {
  padding: 10px 16px;
}
.information .body .body-pannel .pannel .content h6 {
  line-height: 1.5rem;
  padding: 10px 16px;
}
</style>