<script lang="ts" setup></script>

<template>
  <!----- navbar start  ----->
  <section class="main-navbar d-sm-none d-md-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo">
                    <router-link to="/">
                        <img src="/images/logo.png" alt="logo">
                    </router-link>
                </div>
            </div>
            <!-- MAIN MENU -->
            <div class="col-lg-10 d-flex align-items-center justify-content-end">
                <nav class="main_menu">
                    <ul class="sub-menu">
                        <li>
                            <router-link class="active" to="/">Home</router-link>
                        </li>
                        <li><router-link class="" to="/about">About</router-link></li>
                        <li class="menu-item-has-children">
                            <a href="#">Service</a>
                            <ul class="sub-menu">
                                <li><router-link class="" to="">Service</router-link></li>
                                <li><router-link class="" to="">Service Details</router-link></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Projects</a>
                            <ul class="sub-menu">
                                <li><router-link class="" to="">Project</router-link></li>
                                <li><router-link class="" to="">Projects Details</router-link></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="career.html">Career</a></li>
                                <li><a href="erorr.html">Erorr</a></li>
                            </ul>
                        </li>
                        <li><router-link class="" to="/cantact">Contact Us</router-link></li>

                        <!------- search popup start ------->
                        <!-- <li>
                            <a class="btn btn-primary popup-btn" data-bs-toggle="modal" href="#searchModalToggle" role="button"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </li>                            -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- MOBILE MENU Logo AREA -->
<section class="mobile_logo_area d-sm-block d-md-block d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="mobile_menu_logo text-center">
                    <router-link to="/">
                        <img src="/images/logo.png" alt="logo">
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MOBILE MENU AREA -->
<section class="mobile-menu-section d-sm-block d-md-none d-lg-none">
    <div class="menu_area mobile-menu">
        <nav class="mobile_menu">
            <ul class="sub-menu">
                <li><router-link to="/" class="active">Home</router-link></li>
                <li><router-link to="/about" class="">About</router-link></li>
                <li class="menu-item-has-children">
                    <a href="#">Service</a>
                    <ul class="sub-menu">
                        <li><router-link to="" class="">Service</router-link></li>
                        <li><router-link to="" class="">Service Details</router-link></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Project</a>
                    <ul class="sub-menu">
                        <li><router-link to="" class="">Projects</router-link></li>
                        <li><router-link to="" class="">Project Details</router-link></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a>Pages</a>
                    <ul class="sub-menu">
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="erorr.html">Erorr</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog_details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><router-link class="" to="/contact">Contact Us</router-link></li>
            </ul>
        </nav>
    </div>
</section>
<!-- END MOBILE MENU AREA  -->
</template>

<style scoped></style>
