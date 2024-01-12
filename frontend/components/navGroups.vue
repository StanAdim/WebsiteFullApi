<script lang="ts" setup></script>

<template>
  <div class="rd-navbar-group">
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <a class="rd-navbar-brand brand" href="">
                    <img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" 
                    data-src="images/logo-default-143x27.png" 
                    alt="" width="143" height="27"/></a>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-inner">
                    <div class="rd-navbar-btn-wrap">
                      <a class="button button-smaller button-primary-outline" 
                      href="">Appointment</a></div>
                    <ul class="rd-navbar-nav">
                      <li class="active">
                        <nuxt-link to="/">Home</nuxt-link>
                      </li>
                      <li>
                        <nuxt-link to="/about">About</nuxt-link>
                      </li>
                      <li><a href="index.html#">Cases</a>
                        <ul class="rd-navbar-dropdown">
                          <li><nuxt-link to="/">Gallery Grid</nuxt-link></li>
                          <li><nuxt-link to="/">Gallery Grid</nuxt-link></li>
                          <li><nuxt-link to="/">Gallery Grid</nuxt-link></li>
                        </ul>
                      </li>
                      <li><a href="index.html#">Pages</a>
                        <ul class="rd-navbar-megamenu">
                          <li>
                            <h5 class="rd-megamenu-header">Cases Heading</h5>
                            <ul class="rd-navbar-list">
                              <li><nuxt-link to="/">Case 1</nuxt-link></li>
                              <li><nuxt-link to="/">Case 2</nuxt-link></li>
                              <li><nuxt-link to="/">Case 3</nuxt-link></li>
                              <li><nuxt-link to="/">Case 4</nuxt-link></li>
                              <li><nuxt-link to="/">End Final</nuxt-link></li>
                            </ul>
                            <h5 class="rd-megamenu-header">Paging Head</h5>
                            <ul class="rd-navbar-list">
                              <li><nuxt-link to="/">Links Paging</nuxt-link></li>
                              <li><nuxt-link to="/">Links Paging</nuxt-link></li>
                              <li><nuxt-link to="/">Links Paging</nuxt-link></li>
                              <li><nuxt-link to="/">Links Paging</nuxt-link></li>
                              <li><nuxt-link to="/">Links Paging</nuxt-link></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><nuxt-link to="/contact">Contact Us</nuxt-link></li>
                    </ul>
                  </div>
                </div>
              </div>
</template>

<style scoped></style>
