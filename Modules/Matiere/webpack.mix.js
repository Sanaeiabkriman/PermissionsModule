const { mix } = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/matiere.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/matiere.css');

if (mix.inProduction()) {
    mix.version();
}
mix.js('resources/assets/js/app.js', 'public/js')
.js('resources/assets/js/vueapp.js', 'public/js')
.sass('resources/assets/sass/app.scss', 'public/css');