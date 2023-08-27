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

mix.setPublicPath('./wp-content/themes/clinicoeurs/public')
    .js('wp-content/themes/clinicoeurs/resources/js/script.js', 'wp-content/themes/clinicoeurs/public/js/')
    .sass('wp-content/themes/clinicoeurs/resources/sass/site.scss', 'wp-content/themes/clinicoeurs/public/css/')
    .options({
        processCssUrls: false
    })
    .browserSync({
        proxy: 'clinicoeurs.localhost',
        notify: false
    })
    .version();