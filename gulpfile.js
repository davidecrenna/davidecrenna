var elixir = require('laravel-elixir');
//https://www.npmjs.com/package/laravel-elixir-livereload
//require('laravel-elixir-livereload');

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

//elixir.config.sourcemaps = false;

elixir(function(mix) {
   mix.sass('bootstrap.scss')
   .sass('app.scss')
   .sass('variables.scss');

   mix.copy('resources/bower_box/jquery/dist/jquery.js' , 'public/js/vendor')
   .copy('resources/bower_box/velocity/velocity.js' , 'public/js/vendor')
   .copy('resources/bower_box/velocity/velocity.ui.js' , 'public/js/vendor')
   .copy('resources/bower_box/tether/dist/js/tether.js' , 'public/js/vendor')
   .copy('resources/bower_box/bootstrap/dist/js/bootstrap.js' , 'public/js/vendor');

   mix.styles([ 'bootstrap.css' , 'variables.css' , 'app.css' ] , 'public/css/all.css' , 'public/css');

   mix.version('public/css/all.css');

   mix.scripts([ 'jquery.js' , 'velocity.js' , 'velocity.ui.js' , 'tether.js' , 'bootstrap.js'] , 'public/js/all.js' , 'public/js/vendor');

   //mix.livereload();
});

// gulp --production