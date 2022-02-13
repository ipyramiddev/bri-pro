<template>
    <div class="container subscription">
      <div class="title">
        <h2>Subscription Type</h2>
      </div>
      <div class="description">
        <h5>The initial installation cost is reduced and it can be used with the latest version.</h5>
      </div>
      <div class="body row">
        <div class="body-pannel col-md-4 col-sm-12">
            <div class="pannel">
                <div class="head">
                    <h3>1 Month</h3>
                </div>
                <div class="content">
                    <ul>
                        <li>Want to try it</li>
                        <li>Short-term project</li>
                        <li>Highly secure data management</li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="button">
                        <span>subscribe</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-pannel col-md-4 col-sm-12">
            <div class="pannel">
                <div class="head">
                    <h3>3 Months</h3>
                </div>
                <div class="content">
                    <ul>
                        <li>Longer than 1 month</li>
                        <li>Medium project</li>
                        <li>Highly secure data management</li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="button">
                        <span>subscribe</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-pannel col-md-4 col-sm-12">
            <div class="pannel">
                <div class="head">
                    <h3>1 Year</h3>
                </div>
                <div class="content">
                    <ul>
                        <li>Most profitable</li>
                        <li> Long-term project</li>
                        <li>Highly secure data management</li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="button">
                        <span>subscribe</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.subscription {
  padding: 50px 0;
}
.subscription .title {
  text-align: center;
  padding: 40px 0;
}
.subscription .description {
  text-align: center;
  padding: 10px 0;
}
.subscription .body {
  padding: 20px 0;
}
.subscription .body .body-pannel {
  padding: 0.2rem 2.5rem;
}
.subscription .body .body-pannel .pannel {
  box-shadow: 0 1.5px 12px 2px rgba(0, 0, 0, 0.06);
  border-radius: 12px;
}
.subscription .body .body-pannel .pannel .head {
  background-color: #EEEEEE;
  text-align: center;
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
  padding: 16px;
}
.subscription .body .body-pannel .pannel .head h3 {
  font-weight: 600;
}
.subscription .body .body-pannel .pannel .content {
  line-height: 3rem;
  padding: 5rem 1rem 1rem 1rem;
}
.subscription .body .body-pannel .pannel .foot {
    padding: 16px !important;
}
.subscription .body .body-pannel .pannel .foot .button {
    text-align:center;
    height: 50px;
    padding: 8px 16px;
    color: #007FED;
    font-weight: 600;
    border: 1px solid #008FED;
    min-width: 100% !important;
    border-radius: 10px;
    font-size: 20px;
}
.subscription .body .body-pannel .pannel .foot .button:hover {
    background-color: #EEEEEE;
}
</style>