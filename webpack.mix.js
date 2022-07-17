const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/app_sprint/sprint.js', 'public/app_sprint/js')
//     .postCss('resources/app_sprint/sprint.css', 'public/app_sprint/css', [
//         //
//     ]);


mix.js('resources/app_product/js/product.js', 'public/app_product/js')
    .postCss('resources/app_product/css/product.css', 'public/app_product/css', [
        //
    ]);
