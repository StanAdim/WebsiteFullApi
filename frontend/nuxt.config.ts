// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  app:{
    head:{
      "meta": [
        {
          "name": "viewport",
          "content": "width=device-width, initial-scale=1"
        },
        {
          "charset": "utf-8"
        }
      ],
      "link": [],
      "script": [
        {tagPosition: 'bodyClose', defer: "true", type:'text/javascript', src:'/js/core.min.js'},
        {tagPosition: 'bodyClose', defer: "true", type:'text/javascript', src:'/js/main.js'},
        {tagPosition: 'bodyClose', defer: "true", type:'text/javascript', src:'/js/script.js'},
      ],
      "noscript": []
    }
  },
  css: []
})
