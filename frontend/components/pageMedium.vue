<script lang="ts" setup>

const slideData = ref([
  {info:'Site info',
  title:'Welcome slide',
  description:'Busto auctor line conubia euismod nicest rhoncus replenish sixth signs <br> behold creeping creature bustro',
  imagePath:'/uploads/banners/img1.png',
  targetPage:'New Page',
  targetLink:'#',
  EndLine:'',
  isActive:true,
  slideNo:0},
  {info:'Go beyond Order',
  title:'Finish your tasks',
  description:'This site is an official test page',
  imagePath:'/uploads/banners/img2.jpg',
  targetPage:'Open Page',
  targetLink:'#',
  EndLine:'',
  isActive:false,
  slideNo:1},
  {info:'Keep Pushing',
  title:'Last ride game',
  description:'When I see you again',
  imagePath:'/uploads/banners/img3.jpg',
  targetPage:'Open Page',
  targetLink:'#',
  EndLine:'',
  isActive:false,
  slideNo:2},
])
</script>

<template>
 
  <!----- slider start ------->
  <section class="slider">
      <div class="top-shape"></div>
      <div class="bottom-shape"></div>
      <div id="homeCarousel" class="carousel slide">
          <div class="overlay"></div>
          <div class="carousel-indicators">
              <button v-for="item in slideData" :key="item.slideNo" type="button" data-bs-target="#homeCarousel" 
              :data-bs-slide-to="item.slideNo" :class="{'active':item.isActive}" aria-current="true" :aria-label="'Slide ' + item.slideNo"></button>

          </div>
          <div class="carousel-inner">
            <div v-for="item in slideData" :key="item.slideNo" :class="{'active': item.isActive}" class="carousel-item">
                  <img :src="item.imagePath" class="d-block w-100" alt="...">
                  <div class="carousel-caption">
                      <p class="info">{{ item.info }}</p>
                      <h5 class="title"><a href="#">{{ item.title}}</a></h5>
                      <p class="desc">{{ item.description }}</p>
                      
                      <div class="button-area">
                          <a class="btn" :href="item.targetLink">{{ item.targetPage }}</a>
                          <p class="info-bottom">{{ item.EndLine }}</p>
                      </div>
                  </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </section>
  <!-------- slider end -------->
</template>

<style scoped></style>
