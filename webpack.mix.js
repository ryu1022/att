const mix = require('laravel-mix');
const { VueLoaderPlugin } = require('vue-loader');

mix.js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
  
  .webpackConfig({
    module: {
      rules: [
        {
          test: /\.vue$/,
          loader: 'vue-loader'
        }
      ]
    },
    
    plugins: [
      new VueLoaderPlugin()
    ]
    
  ]);

mix.js("resources/js/app.js", "public/js")
   .postCss("resources/css/app.css", "public/css", [
      require("tailwindcss"),
   ]);
