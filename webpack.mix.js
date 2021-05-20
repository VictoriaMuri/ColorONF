const mix = require('laravel-mix');

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/reset.css', 'public/css')
  .sass('resources/scss/main.scss', 'public/css/app.css')
  .sourceMaps();
