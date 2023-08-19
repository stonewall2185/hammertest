let mix = require('laravel-mix');

// Your WordPress theme name and file paths
// var themeName = "hammermarketing";
const themePath = './';
const assets = themePath + '/assets';
const dist = themePath + '/dist';
mix.setPublicPath(`${dist}`);

// Compile the assets
mix.sass(`${assets}/scss/style.scss`, `${dist}/css`)
    .sourceMaps();

mix.scripts(`${assets}/js/partials`, `${dist}/js/scripts.js`)
    // Autoload (jQuery --> $)
    .autoload({
        jquery: ['$', 'window.jQuery']
    })
    .sourceMaps();

// Minify the compiled assets
mix.minify([
    `${dist}/css/style.css`,
    `${dist}/js/scripts.js`
]);

// Disable OS notifications
// mix.disableSuccessNotifications();

// BrowserSync - change proxy value to your dev URL
// mix.browserSync({
//     proxy: "http://mywebsite.ham",
//     files: [
//         `${themePath}/**/*.php`,
//         `${themePath}/**/*.js`,
//         `${themePath}/**/*.css`,
//     ]
// });