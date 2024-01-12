<script lang="ts" setup></script>

<template>
  <div>
    <preloader></preloader>
    <page-head></page-head>
    <div class="page">
      <page-head></page-head>
      <slot />
      <page-foot></page-foot>
    </div>
    <page-foot></page-foot>
  </div>
</template>

<style >
@import url("~/assets/css/bootstrap.css");
@import url("~/assets/css/fonts.css");
@import url("~/assets/css/style.css");
</style>
