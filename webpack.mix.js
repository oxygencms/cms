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

 // content blocks styles (used for the TinyMCE editor in the backoffice)
mix.sass('resources/scss/_blocks.scss', 'css');

// Front
mix.js('resources/js/app.js', 'js')
    .sass('resources/scss/app.scss', 'css');

// Back Office
mix.js('resources/js/admin/admin.js', 'js')
    .sass('resources/scss/admin/admin.scss', 'css');
