var elixir = require('laravel-elixir');

require('laravel-elixir-codeception');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        "libs/bootstrap.min.css",
        "libs/flat-ui.css",
        "libs/icon-font.css",
        "libs/animations.css",
        "app.css"
    ], "public/css/");

    mix.scripts([
    	"libs/jquery.min.js",
    	"libs/bootstrap.min.js",
    	"libs/modernizr.custom.js",
    	"libs/page-transitions.js",
    	"libs/startup-kit.js",
    	"custom.js"
    ], "public/js/");

    mix.version(["css/all.css", "js/all.js"]);

});