let mix = require('laravel-mix');
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

mix.copy('./node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js')
	.copy('./node_modules/jquery/dist/jquery.min.js', 'public/js')
	.copy('./node_modules/popper.js/dist/popper.min.js', 'public/js')
	.copy('./node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css')
	.copy('./node_modules/font-awesome/css/font-awesome.min.css', 'public/css')
	.copy('./node_modules/font-awesome/fonts/*', 'public/fonts')
	.sass('resources/assets/sass/style.sass', 'public/css')
	.sass('resources/assets/sass/admin.sass', 'public/css')
	// .sass('resources/assets/sass/app.scss', 'public/css')
	// .js('resources/assets/js/app.js', 'public/js')
	.browserSync('http://localhost/laravel/public/');