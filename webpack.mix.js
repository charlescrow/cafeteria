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
const path = require('path');


mix.alias({
    ziggy: path.resolve('vendor/tightenco/ziggy/dist')
});

mix.sass('resources/sass/toastr.scss', 'public/css');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.js('resources/js/productos/principal.js', 'public/js/productos/principal.js');
mix.js('resources/js/ventas/principal.js', 'public/js/ventas/principal.js');
