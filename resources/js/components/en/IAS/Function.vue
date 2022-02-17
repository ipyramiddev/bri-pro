<template>
    <div class="ias_function">
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
                  title: "Extraction of targets by filtering",
                  text: "It is easy to extract object that were difficult to recognize in the past.",
                  image: "",
              },{
                  id: 2,
                  title: "Supports multidimensional data",
                  text: "Supports 3D time lapse, HCA, and tiling 3D.",
                  image: "",
              },{
                  id: 3,
                  title: "Deep learning library",
                  text: "It supports libraries in various situations, and of course we also help you create libraries(optional).",
                  image: "",
              },{
                  id: 4,
                  title: "Supports various orifinal file formats",
                  text: "With our unique Know-how, we can read and analyze data that could only be analyzed by that manufacture in the past.",
                  image: "",
              },{
                  id: 5,
                  title: "Inquiries by chat are possble",
                  text: "Even beginners can use it with confodence, Otically improving work efficiency.",
                  image: "",
              }
          ]
      }
    }
  }
</script>

<style scoped>
.ias_function {
    padding-top: 5rem;
    padding-bottom: 1rem;
}
.ias_function .container {
    width: 70%;
}
.ias_function .title {
  text-align: center;
  padding: 20px 0;
}
.ias_function .title h2 {
  text-transform: uppercase;
  color: #0D70FA;
}
.ias_function .card {
    background-color: unset;
    border: none;
}
.ias_function .card-header {
    background-color: unset;
    border-bottom-color: #939393;
}
.ias_function .list {
    padding: 10px;
}
.ias_function .list svg {
    margin-right: 5px;
}
.ias_function .list.not-collapsed svg {
    transform: rotate(90deg);
    transition: 0.3s
}
</style>