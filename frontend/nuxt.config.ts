export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: ['@nuxtjs/tailwindcss'],
  app: {
    head: {
      title: 'ICT Commission',
      meta: [
        { charset: "utf-8" },
        { name: "viewport", content: "width=device-width, initial-scale=1" },
        { hid: "description", name: "description", content: "" }
      ],
      link:[
        { rel: "icon", type: "image/x-icon", href: "/images/logo.png" },
        {
          rel:"stylesheet" ,
          href:"https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Rajdhani:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        }
      ],
      "script": [
        {  type:"text/javascript", src:"/assets/js/jquery-3.7.0.min.js"},
        {  type:"text/javascript", src:"/assets/js/popper.min.js"},
        {  type:"text/javascript", src:"/assets/js/bootstrap.min.js"},
        {  type:"text/javascript", src:"/assets/js/all.min.js"},
        {  type:"text/javascript", src:"/assets/js/owl.carousel.min.js"},
        {  type:"text/javascript", src:"/assets/js/jquery.waypoints.min.js"},
        {  type:"text/javascript", src:"/assets/js/jquery.counterup.min.js"},
        {  type:"text/javascript", src:"/assets/js/isotope.pkgd.min.js"},
        {  type:"text/javascript", src:"/assets/js/jquery.fancybox.min.js"},
        {  type:"text/javascript", src:"/assets/js/wow.min.js"},
        {  type:"text/javascript", src:"/assets/js/jquery.lineProgressbar.js"},
        {  type:"text/javascript", src:"/assets/js/jquery.meanmenu.min.js"},
        {  type:"text/javascript", src:"/assets/js/script.js"},
      ],
      "noscript": []
    }
  },
  css: []
})
