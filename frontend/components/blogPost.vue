<script lang="ts" setup>
const posts = ref([
  {
    id: 1,
    day: '03',
    month: 'DES',
    category: 'Software',
    title: 'Develop High End',
    path:'',
    imagePath: '/images/img3.png'
  },
  {
    id: 2,
    day: '04',
    month: 'JAN',
    category: 'Technology',
    title: 'Breaking the chain of growth retardation',
    imagePath:'/images/img1.png',
    path: ''
  },
  {
    id: 3,
    day: '04',
    month: 'JAN',
    category: 'AI',
    title: 'Quicker data analysis and growth',
    path:'',
    imagePath: '/images/img2.png'
  },
])
</script>

<template>
 <!----- blog start ----->
<section class="blog">
  <div class="container">
      <div class="row">
          <div class="section-title">
              <h2>Our Recents Blog</h2>
              <h3>Our News & Update </h3>
          </div>
      </div>
      <div class="row justify-content-center">
          <div v-for="item in posts" :key="item.id" class="col-lg-4 col-md-6 col-sm-12">
              <div class="single-blog ">
                  <div class="image-area">
                      <a href="#">
                          <img :src="item.imagePath" alt="">
                      </a>
                  </div>
                  <div class="content-area">
                      <div class="date-area">
                          <h2 class="day">{{item.day}}</h2>
                          <h2 class="month">{{item.month}}</h2>
                      </div>
                      <p class="category">{{item.category}}</p>
                      <h2 class="title">
                          <a href="">{{ item.title }}
                            <br> Break title to 24 char</a>
                      </h2>
                      <div class="button-area">
                          <a href="#">Read More
                              <span class="icon"><i class="fa-solid fa-angles-right"></i>
                              </span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
        <!------- blog end -------->
</template>

<style scoped></style>
