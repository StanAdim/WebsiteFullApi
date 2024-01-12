<script lang="ts" setup></script>

<template>
  <div class="rd-navbar-aside-wrap">
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                  <div class="rd-navbar-aside-content">
                    <ul class="rd-navbar-aside-group list-units">
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="callto:#">+255738171742</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary mdi mdi-email-outline"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="mailto:#">info@ictc.go.tz</a></div>
                        </div>
                      </li>
                    </ul>
                    <div class="rd-navbar-aside-group">
                      <ul class="list-inline list-inline-reset">
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller mdi mdi-facebook" href="#"></a></li>
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller mdi mdi-twitter" href="#"></a></li>
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller mdi mdi-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="rd-navbar-search">
                  <form class="rd-search" action="#" method="GET" data-search-live="rd-search-results-live" data-search-live-count="6">
                    <div class="rd-search-inner">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-search-form-input">Search...</label>
                        <input class="form-input form-control" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                      </div>
                      <button class="rd-search-submit" type="submit"></button>
                    </div>
                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                  </form>
                  <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap"></button>
                </div>
              </div>
</template>

<style scoped></style>
