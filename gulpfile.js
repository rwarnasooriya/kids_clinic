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

dir = {
  asset: {
    css: 'public/css',
    img: 'public/images',
    js: 'public/js',
    font: 'public/fonts'
  },
  resources: 'resources/assets',
  browserify: 'resources/js',
  vendor: 'vendor/bower_components'
};

elixir(function(mix) {
    mix.sass(['app.scss'],'resources/assets/css');
    
    mix.styles([
        'app.css',
        'custom.css'
    ]);
    
    mix.browserify('app.js');
    
    mix.copy("resources/assets/images/", dir.asset.img);
    
    mix.version([
        dir.asset.css + '/all.css',
        dir.asset.js + '/app.js'
  ]);
});
