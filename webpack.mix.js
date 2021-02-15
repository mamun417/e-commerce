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

mix.scripts([
    'resources/frontend/js/jquery-3.3.1.min.js',
    'resources/frontend/styles/bootstrap4/popper.js',
    'resources/frontend/styles/bootstrap4/bootstrap.min.js',
    'resources/frontend/plugins/greensock/TweenMax.min.js',
    'resources/frontend/plugins/greensock/TimelineMax.min.js',
    'resources/frontend/plugins/scrollmagic/ScrollMagic.min.js',
    'resources/frontend/plugins/greensock/animation.gsap.min.js',
    'resources/frontend/plugins/greensock/ScrollToPlugin.min.js',
    'resources/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js',
    'resources/frontend/plugins/slick-1.8.0/slick.js',
    'resources/frontend/plugins/easing/easing.js',
    'resources/backend/js/plugins/toastr/toastr.min.js',
    'resources/frontend/js/axois.js',
    'resources/frontend/js/custom.js',
], 'public/js/frontend/app.js');

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

mix.copyDirectory('resources/frontend/plugins/fontawesome-free-5.0.1/webfonts', 'public/css/webfonts');

// mix.browserSync('http://127.0.0.1:8000');
