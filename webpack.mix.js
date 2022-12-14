const mix = require('laravel-mix');

mix.copyDirectory('src/fonts', 'public/assets/fonts');
mix.copyDirectory('src/images', 'public/assets/images');

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

mix.js('src/js/scripts.js', 'public/assets/js').sourceMaps(true, 'source-map');
mix.sass('src/sass/style.scss', 'public/assets/css').sourceMaps(true, 'source-map');

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