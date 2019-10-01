let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Lumen application. We are compiling the Sass file for your
 | application, as well as bundling up your JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css');
