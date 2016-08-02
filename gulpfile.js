var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var resourcesAssets = 'resources/assets/';
var dest = 'public/assets/';
var destImg = dest + 'img/';

elixir(function(mix) {
    mix.sass('app.scss');

    // Copy images straight to public
    mix.copy(resourcesAssets + 'img', destImg);
    
    // Copy waypoints
    mix.copy('node_modules/waypoints/lib/jquery.waypoints.min.js', 'public/js/');
});
