// webpack.mix.js
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | 以下例子會把 resources/js/app.js 和 resources/sass/app.scss
 | 編譯打包到 public/js && public/css 底下。你可以按需求自行調整
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .version();

// webpack.mix.js

