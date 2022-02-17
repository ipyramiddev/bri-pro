<template>
    <div>
        <div class="container">
            <div class="flowcal_description row">
                <div class="span col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon">
                                <b-icon icon="briefcase-fill"></b-icon>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="text">
                                <h4>supports various analysis methods</h4>
                                <h6>It also supports high-demensional analysis such as v-NSE analysis, SPADE analysis, FLowSOM, and CITRUS.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon">
                                <b-icon icon="book-fill"></b-icon>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="text">
                                <h4>remote discussion</h4>
                                <h6>Since it is a cloud-compatible web application, ir also supports remote discussions. It is easy to judge because it observes the data directly.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon">
                                <b-icon icon="credit-card"></b-icon>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="text">
                                <h4>equipped with ai functions</h4>
                                <h6>Deep learning and machine learning functions can be introduced at low cost for subscription sales.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon">
                                <b-icon icon="calculator-fill"></b-icon>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="text">
                                <h4>remote device operation(optional)</h4>
                                <h6>Business efficiency can he improved by connecting the target device to the API and performing remote control.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.flowcal_description {
    width: 100%;
    padding: 5rem 0;
}
.flowcal_description .span {
    display: flex;
    justify-content: space-around;
    padding: 30px 10px;
}
.flowcal_description .span .icon,
.flowcal_description .span .text {
    padding-left: 5px 0;
}
.flowcal_description .span .row {
    display: flex;
    align-items: center;
}
.flowcal_description .span .icon {
    width: 90px;
    height: 90px;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    border: 2px solid #4054B2;
    border-radius: 50%;
    color: #4054B2;
    transition: 0.3s
}
.flowcal_description .span .icon:hover {
    color: #fff;
    background-color: #4054B2;
    transition: 0.3s
}
.flowcal_description .span .icon svg {
    font-size: 2rem;
}
.flowcal_description .span .text h4 {
    font-weight: 500;
    text-transform: uppercase;
}
</style>