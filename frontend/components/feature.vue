<script lang="ts" setup>
const features = ref([
  { title : "Business Growth Plannings",
    description: 'Globally evisculate one-to web services the dynamic markets magnetic'
  },
  { title : "Perfect Business Solutions<",
    description: 'Globally evisculate one-to web services the dynamic markets magnetic'
  },
  { title : "Market Research Strategy",
    description: 'Globally evisculate one-to web services the dynamic markets magnetic'
  },
])

</script>
<template>
<!------ feature  start ------->
  <section class="feature">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div v-for="item in features" :key="item.title" class="col-lg-4 col-md-12 col-sm-12">
                  <div class="single-feature">
                      <div class="header">
                          <div class="icon-box">
                              <span class="icon"><i class="flaticon-super-intelligence"></i></span>
                          </div>
                          <h5 class="title">{{ item.title }}</h5>
                      </div>
                      <p class="desc">{{ item.description }}</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
<!------ feature end ------>
</template>

<style scoped></style>
