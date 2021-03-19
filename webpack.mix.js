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

<<<<<<< HEAD
<<<<<<< HEAD
 let theme = process.env.npm_config_theme;

 if(theme) {
    require(`${__dirname}/themes/${theme}/webpack.mix.js`);
 } else {
     // default theme to compile if theme is not specified
   require(`${__dirname}/themes/theme-name/webpack.mix.js`);
 }
=======
=======
>>>>>>> 15dc74ce489af3c27bd82a483ae3c00b8e79ccbb
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
<<<<<<< HEAD
>>>>>>> 15dc74ce489af3c27bd82a483ae3c00b8e79ccbb
=======
>>>>>>> 15dc74ce489af3c27bd82a483ae3c00b8e79ccbb
