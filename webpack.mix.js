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

mix
    .js([
        'resources/js/app.js',
        'resources/js/router.js'
    ], 'public/js')
    .sass('resources/sass/app.scss', '../resources/sass/build')
    .sass('resources/sass/common.scss', '../resources/sass/build')
    .styles([
        'resources/sass/build/app.css',
        'resources/sass/build/common.css'
    ], 'public/css/app.css');
