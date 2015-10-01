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
    //Copy Vue.js to libs
    mix.copy('node_modules/vue/dist/vue.min.js', 'resources/assets/js/libs/vue.min.js');
    mix.copy('node_modules/vue-resource/dist/vue-resource.min.js', 'resources/assets/js/libs/vue-resource.min.js');
    mix.copy('node_modules/vue-validator/dist/vue-validator.min.js', 'resources/assets/js/libs/vue-validator.min.js');

    //Static pages layout CSS
    mix.styles([
        "libs/bootstrap.min.css",
        "libs/bootstrap-select.min.css",
        "libs/flat-ui.css",
        "libs/icon-font.css",
        "libs/animations.css",
        "app.css"
    ], "public/css/");

    //Static  pages layout JS
    mix.scripts([
    	"libs/jquery.min.js",
    	"libs/bootstrap.min.js",
        "libs/bootstrap-select.min.js",
    	"libs/modernizr.custom.js",
    	"libs/page-transitions.js",
    	"libs/startup-kit.js",
    	"custom.js"
    ], "public/js/");

    //Profile pages layout CSS
    mix.styles([
        "libs/bootstrap.min.css",
        "libs/bootstrap-select.min.css",
        "libs/flat-ui.css",
        "libs/icon-font.css",
        "libs/animations.css",
        "libs/jquery-datetimepicker.css",
        "app.css",
        "profile.css",
    ], "public/css/app.css");

    //Profile pages JS
    mix.scripts([
    	"libs/jquery.min.js",
    	"libs/jquery-datetimepicker.min.js",
        "libs/jquery.easing.min.js",
        "libs/bootstrap.min.js",
        "libs/bootstrap-select.min.js",
        "libs/modernizr.custom.js",
    	"libs/page-transitions.js",
    	"libs/startup-kit.js",
        "libs/vue.min.js",
        "libs/vue-resource.min.js",
        "libs/vue-validator.min.js",
    	"custom.js",
        "backend.js"
    ], "public/js/app.js");

    mix.version(["css/all.css", "js/all.js", "css/app.css", "js/app.js"]);

});
