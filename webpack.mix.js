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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/frontend/styles/bootstrap4/bootstrap.min.css',
    'resources/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css',
    'resources/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css',
    'resources/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
    'resources/frontend/plugins/OwlCarousel2-2.2.1/animate.css',
    'resources/frontend/plugins/slick-1.8.0/slick.css',
    'resources/frontend/styles/main_styles.css',
    'resources/frontend/styles/responsive.css',
    'resources/backend/css/plugins/toastr/toastr.min.css',
    'resources/frontend/styles/cus_style.css',
], 'public/css/frontend/style.css');
