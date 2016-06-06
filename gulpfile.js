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

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
    mix.babel('app.js');
});

elixir(function(mix) {
    var npmDir = 'node_modules/',
        jsDir = 'resources/assets/js/';

    mix.copy(npmDir + 'vue/dist/vue.js', jsDir);
    mix.copy(npmDir + 'vue-resource/dist/vue-resource.js', jsDir);
    mix.copy(npmDir + 'vue-pagination/dist/vue-bootstrap-pagination.js', jsDir);

    mix.scripts([
        'vue.js',
        'vue-resource.js',
        'vue-bootstrap-pagination.js'
    ], 'public/js/vendor.js');

});
