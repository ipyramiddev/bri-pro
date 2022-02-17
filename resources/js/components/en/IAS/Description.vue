<template>
    <div>
        <div class="container">
            <div class="description row">
                <div class="span col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon">
                                <b-icon icon="briefcase-fill"></b-icon>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="text">
                                <h4>supports various metadata</h4>
                                <h6>Supports multidimensional data and complex big data by supoorting metafiles from various microcope manufactures.</h6>
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
                                <h4>ai equipped with functions</h4>
                                <h6>Complicated analysis can be easily performed by incorporating deep learning and machine learning functions.</h6>
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
                                <h6>Business dfficiency can he improved by connecting the target device to the API and performing remote control.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.description {
    width: 100%;
    padding: 5rem 0;
}
.description .span {
    display: flex;
    justify-content: space-around;
    padding: 30px 10px;
}
.description .span .icon,
.description .span .text {
    padding-left: 5px 0;
}
.description .span .row {
    display: flex;
    align-items: center;
}
.description .span .icon {
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
.description .span .icon:hover {
    color: #fff;
    background-color: #4054B2;
    transition: 0.3s
}
.description .span .icon svg {
    font-size: 2rem;
}
.description .span .text h4 {
    font-weight: 500;
    text-transform: uppercase;
}
</style>