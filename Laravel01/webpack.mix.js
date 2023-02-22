const mix = require('laravel-mix');

// mix.scripts([
//     'resources/js/my-script.js',
//     'resources/js/my-script-console.js',
// ],    'public/js/my-app.js');

// mix.styles([
//     'resources/css/my-style.css',
//     'resources/css/my-style-h1.css',
// ],    'public/css/my-app.css');

// mix.scripts([
//     'resources/js/my-script.js',
//     'resources/js/my-script-console.js',
//     ], 'public/js/my-app.js'); 

// // mix.sass('resources/sass/my-style-h1.scss', 'public/css/my-app.css')
// // mix.sass('resources/sass/my-style.scss', 'public/css/my-app.css')

// mix.sass('resources/sass/app.scss', 'public/css/my-app.css');

mix.scripts([
    'resources/js/my-script.js',
    'resources/js/my-script-console.js',
    ], 'public/js/my-app.js').version();

mix.sass('resources/sass/app.scss', 'public/css/my-app.css').version();

