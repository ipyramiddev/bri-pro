<template>
    <div class="flowcal_function">
        <div class="container">
            <div class="title">
                <h2>main functions</h2>
            </div>
            <div class="accordion" role="tablist">
                <div v-for="item in listdatas" :key="item.id">
                    <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <div class="list" v-b-toggle.col-1 variant="info"><b-icon icon="caret-right-fill"></b-icon>{{ item.title }}</div>
                    </b-card-header>
                    <b-collapse id="col-1" visible accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                        <b-card-text>{{ item.text }}</b-card-text>
                        <b-card-text>{{ item.image }}</b-card-text>
                        </b-card-body>
                    </b-collapse>
                    </b-card>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
          listdatas: [
              {
                  id: 1,
                  title: "Intutive operation and chat support",
                  text: "The easy-to-use interface allows you to create comprehecsive data analysis workflows.chat support is also available to assist you in case of operational difficulties or more complex analysis.",
                  image: "",
              },{
                  id: 2,
                  title: "Robust cloud-based data managment",
                  text: "The use of a highly secure cloud enhances data intefrity, and authorization allows for remote discussions",
                  image: "",
              },{
                  id: 3,
                  title: "Compatible with V-NSE, FlowSOM, SPADE, CITRUS, UMAP, etc",
                  text: "Automatically cluster cells with similar phenotypes or plot data in multiple dimensions for visualization. Automatically classify cell data and identify targets by statistical prediction across sample groups.",
                  image: "",
              },{
                  id: 4,
                  title: "Support for machine learning and deep learning",
                  text: "Supprot for machine learning and deep learning make it easier to analyze big data.",
                  image: "",
              },{
                  id: 5,
                  title: "Support for subscription sales",
                  text: "By supporting subsctiotion sales, reseatch testing can be started with little initial investment.",
                  image: "",
              }
          ]
      }
    }
  }
</script>

<style scoped>
.flowcal_function {
    padding-top: 5rem;
    padding-bottom: 1rem;
}
.flowcal_function .container {
    width: 70%;
}
.flowcal_function .title {
  text-align: center;
  padding: 20px 0;
}
.flowcal_function .title h2 {
  text-transform: uppercase;
  color: #0D70FA;
}
.flowcal_function .card {
    background-color: unset;
    border: none;
}
.flowcal_function .card-header {
    background-color: unset;
    border-bottom-color: #939393;
}
.flowcal_function .list {
    padding: 10px;
}
.flowcal_function .list svg {
    margin-right: 5px;
}
.flowcal_function .list.not-collapsed svg {
    transform: rotate(90deg);
    transition: 0.3s
}
</style>