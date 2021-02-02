// webpack.mix.js

let mix = require('laravel-mix');

mix
.js('Milestone1/src/app.js', 'js')
.sass('Milestone1/src/app.scss', 'css')
.setPublicPath('dist');