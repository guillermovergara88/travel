const mix = require('laravel-mix');
const path = require('path');
const fs = require('fs');
const fsExtra = require('fs-extra');


fsExtra.copySync('resources/images', 'public/images');

const jsFiles = [
  'resources/js/bootstrap.min.js',
  'resources/js/jquery.sticky.js',
  'resources/js/click-scroll.js',
  'resources/js/custom.js',
];

mix.copy('resources/js/jquery.min.js', 'public/js/jquery.min.js');


jsFiles.forEach(file => {
  mix.js(file, 'public/js');
});

// Compile all CSS files
fs.readdirSync('resources/css').forEach(file => {
  if (file.endsWith('.css')) {
    mix.postCss(path.join('resources/css', file), 'public/css');
  }
});



