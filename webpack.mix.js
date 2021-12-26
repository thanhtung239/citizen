const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/js/app.js', 'node_modules/canvasjs/dist/canvasjs.js'], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/assets/img', 'public/img')
    .copy('resources/assets/fonts', 'public/fonts');
