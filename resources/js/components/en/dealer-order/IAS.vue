<template>
    <div class="container dealer_ias">
        <div class="title">
            <h2>IAS Image Analysis web Application</h2>
            <h6>When ordering, please select the following items. Please note that hte prices are excclusive of tax. When you click on the "Order" button, the user information entry form will be displayed. Once the order is placed, an invoice will be sent ti your company and user license information will be sent to thr user via e-mail. Please note htat the order cannot be cnacelled after it has been placed. Also, please note that prices and specifications are subject to change without notice.</h6>
        </div>
        <div class="body row">
            <div class="body-pannel col-md-3 col-sm-12">
                <div class="pannel">
                    <div class="head">
                        <h4>IAS 1 MONTH PLAN</h4>
                        <h6>500G</h6>
                    </div>
                    <div class="cost">
                        <h2>US$306</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li><b-icon icon="check-circle"></b-icon>1 license</li>
                            <li><b-icon icon="check-circle"></b-icon>500GB server</li>
                            <li><b-icon icon="check-circle"></b-icon>Chat support</li>
                        </ul>
                    </div>
                    <div class="foot">
                        <b-button variant="outline-primary">Order Now</b-button>
                    </div>
                    <div class="discount">
                        <h4>15% discount of</h4>
                        <h3>US$360</h3>
                    </div>
                </div>
            </div>
            <div class="body-pannel col-md-3 col-sm-12">
                <div class="pannel">
                    <div class="head">
                        <h4>IAS 3 MONTH PLAN</h4>
                        <h6>500G</h6>
                    </div>
                    <div class="cost">
                        <h2>US$850</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li><b-icon icon="check-circle"></b-icon>1 license</li>
                            <li><b-icon icon="check-circle"></b-icon>500GB server</li>
                            <li><b-icon icon="check-circle"></b-icon>Chat support</li>
                        </ul>
                    </div>
                    <div class="foot">
                        <b-button variant="outline-primary">Order Now</b-button>
                    </div>
                    <div class="discount">
                        <h4>15% discount of</h4>
                        <h3>US$1,000</h3>
                    </div>
                </div>
            </div>
            <div class="body-pannel col-md-3 col-sm-12">
                <div class="pannel">
                    <div class="head">
                        <h4>IAS 1 YEAR PLAN</h4>
                        <h6>500G</h6>
                    </div>
                    <div class="cost">
                        <h2>US$3,060</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li><b-icon icon="check-circle"></b-icon>1 license</li>
                            <li><b-icon icon="check-circle"></b-icon>500GB server</li>
                            <li><b-icon icon="check-circle"></b-icon>Chat support</li>
                        </ul>
                    </div>
                    <div class="foot">
                        <b-button variant="outline-primary">Order Now</b-button>
                    </div>
                    <div class="discount">
                        <h4>15% discount of</h4>
                        <h3>US$3,600</h3>
                    </div>
                </div>
            </div>
            <div class="body-pannel col-md-3 col-sm-12">
                <div class="pannel">
                    <div class="head">
                        <h4>IAS 1 YEAR PLAN SPECIAL</h4>
                        <h6>2T</h6>
                    </div>
                    <div class="cost">
                        <h2>US$12,240</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li><b-icon icon="check-circle"></b-icon>1 license</li>
                            <li><b-icon icon="check-circle"></b-icon>2TB server</li>
                            <li><b-icon icon="check-circle"></b-icon>Chat support</li>
                        </ul>
                    </div>
                    <div class="foot">
                        <b-button variant="outline-primary">Order Now</b-button>
                    </div>
                    <div class="discount">
                        <h4>15% discount of</h4>
                        <h3>US$14,400</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <h6>If you have any requests for additional features, please contact us from the Contact Us page with your user information.</h6>
            <b-button variant="outline-primary" :to="{ name: 'contact_en'}">Contact Us</b-button>
        </div>
    </div>
</template>

<style scoped>
.dealer_ias {
  padding: 20px 0;
}
.dealer_ias .title {
  padding: 40px 0 20px 0;
}
.dealer_ias .title h6 {
  padding-top: 20px;
  padding-left: 20px;
  line-height: 1.5rem;
}
.dealer_ias .description {
    display: flex;
    justify-content: space-between;
}
.dealer_ias .description .btn-outline-primary {
    border-radius: 10px;
}
.dealer_ias .body {
  padding: 20px 0;
}
.dealer_ias .body .body-pannel {
  padding: 0.2rem 1rem;
}
.dealer_ias .body .body-pannel .pannel {
  border-radius: 6px;
  background-color: #E8E8E8;;
  transition: 0.3S
}
.dealer_ias .body .body-pannel .pannel:hover {
  box-shadow: 0 1.5px 12px 2px rgba(0, 0, 0, 0.74);
  transition: 0.3S
}
.dealer_ias .body .body-pannel .pannel .head {
  text-align: center;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  padding: 20px 10px 10px 10px;
  min-height:8rem;
}
.dealer_ias .body .body-pannel .pannel .head h4 {
  font-weight: 600;
}
.dealer_ias .body .body-pannel .pannel .cost {
  text-align: center;
}
.dealer_ias .body .body-pannel .pannel .cost h2 {
  font-weight: 700;
}
.dealer_ias .body .body-pannel .pannel .content {
  line-height: 2rem;
  padding: 1rem;
}
.dealer_ias .body .body-pannel .pannel .content li {
  list-style-type: none;
}
.dealer_ias .body .body-pannel .pannel .content li svg {
  width: 3.5rem;
}
.dealer_ias .body .body-pannel .pannel .foot {
    padding: 0.5rem 0 1rem 0;
    text-align: center;
}
.dealer_ias .body .body-pannel .pannel .foot .btn-outline-primary {
    color: #fff;
    background-color: #007FED;
    transition: 0.2s;
    padding: 5px 15px;
    border-radius: 15px;
}
.dealer_ias .body .body-pannel .pannel .foot .btn-outline-primary:hover {
    background-color: #FFF;
    color: #007FED;
    cursor: pointer;
}
.dealer_ias .body .body-pannel .pannel .discount {
    padding: 10px 0 15px 0;
    text-align: center;
}
</style>