// ======================================================================
// config stolen from 
// Forge Lite <https://hashandsalt.com | <hello@hashandsalt.com>
// and
// https://gist.github.com/fredericseiler/b6f96a8f4ea498255c3942f3e5917fe1
// ======================================================================

let mix = require('laravel-mix');


// ======================================================================
// Mix Settings
// ======================================================================

// Copy Files
// ======================================================================

mix.copyDirectory('src/fonts', 'public/assets/fonts');
mix.copyDirectory('src/images', 'public/assets/images');

// BrowserSync
// ======================================================================
if (! mix.inProduction()) {
    
  let homedir = require('os').homedir();
  let domain = 'bizkit.test';

  mix.browserSync({
      files: [
          "public/assets/js/**/*.ts",
          "public/assets/css/**/*.css",
          "public/site/templates/*.php",
          "public/site/snippets/**/*.php",
          "public/site/plugins/**/*.php",
          "public/content/**/*.txt"
      ],
      host: domain,
      port: 3000,
      open: false,
      notify: false,
      online: false,
      
      https: {
          key: homedir + '/.config/valet/Certificates/' + domain + '.key',
          cert: homedir + '/.config/valet/Certificates/' + domain + '.crt',
      },
      
      proxy: {
          target: 'https://' + domain,
          cookies: { stripDomain: false }
      },
  });
}

// Javascript
// ======================================================================
mix.js('src/js/scripts.js', 'public/assets/js').sourceMaps(true, 'source-map');

// SASS
// ======================================================================

mix.sass('src/sass/style.scss', 'public/assets/css').sourceMaps(true, 'source-map');

// ======================================================================
// Mix Options
// ======================================================================
mix.options({
  processCssUrls: false,
  postCss: [],

})

mix.disableNotifications();

// ======================================================================
// Custom Webpack Config
// ======================================================================
mix.webpackConfig({
  plugins: []
});