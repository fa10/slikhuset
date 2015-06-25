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
      mix.styles([
          "animate.css",
          "bootstrap.css",
          "elixir.css",
          "font-awesome.min.css",
          "isotope.css",
          "lightbox.css",
          "magnific-popup.css",
          "prettyPhoto.css",
          "swipebox.css",
          "YTPlayer.css",
          "owl.carousel.css",
          "owl.theme.css",
          "owl.transitions.css"
      ]);
    mix.scripts([
        "modernizr.custom.js",
        "jquery.js",
        "classie.js",
        "pathLoader.js",
        "owl.carousel.js",
        "jquery.inview.js",
        "jquery.mb.YTPlayer.js",
        "jquery.form.js",
        "jquery.validate.js",
        "bootstrap.min.js",
        "default.js",
        "jquery.isotope.min.js",
        "jquery.prettyPhoto.js",
        "jquery.swipebox.js"
    ]);

});
