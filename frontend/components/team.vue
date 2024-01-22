<script lang="ts" setup>
const leaders = ref([
  {
    name:'Dr Nkundwe Mwasaga',
    id: 1,
    designation:'Director General',
    email: 'dg@ictc.go.tz',
    imgPath: '/uploads/leaders/img1.png'
  },
  {
    name:'Prof Leonard J Massele',
    id: 2,
    designation:'Chair of Board',
    email: 'dg@ictc.go.tz',
    imgPath: '/uploads/leaders/img3.png'
  }
])
</script>

<template>
<!-------- team start -------->
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <!-- <h2>Our Team Member</h2> -->
                    <h3>Leaders</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div v-for="leader in leaders" :key="leader.id" class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-team">
                    <div class="team-image">
                        <!-- <div class="overlay"></div> -->
                        <img  :src="leader.imgPath" :alt="leader.imgPath" >
                    </div>
                    <div class="team-info">
                        <div class="team-info-inner">
                            <h3 class="name">{{leader.name}}</h3>
                            <h5 class="designation">{{leader.designation}}</h5>
                            <ul class="team-contact-icon">
                                <li>
                                    <a :href="`mailto:${leader.email}`">
                                        <i class="fa-regular fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-------- team end -------->
</template>

<style scoped></style>
