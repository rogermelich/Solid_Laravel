var elixir = require('laravel-elixir');

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
    mix.less('app.less');
    mix.less('admin-lte/AdminLTE.less');
    mix.less('bootstrap/bootstrap.less');

    mix.copy('bower_components/jquery-pjax/jquery.pjax.js', 'resources/assets/js');

    mix.scripts([
        'sweetalert-dev.js'
    ]);

    mix.styles([
        'sweetalert.css'
    ]);

});
