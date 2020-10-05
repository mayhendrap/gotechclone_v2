const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix
  .js("src/js/min.js", "public/js/min.js")
  .sass("src/sass/min.sass", "public/css/min.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.config.js")],
  })
  .setPublicPath("public");
