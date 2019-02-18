var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('.build')
    .setPublicPath('/')
    .addEntry('js/site', './assets/js/site.js')
    .addStyleEntry('css/site', './assets/css/site.css')
    .enablePostCssLoader()
    .configureBabel(function (babel) {
        babel.plugins.push(['prismjs', {
            "languages": ["php", "http"],
            "css": false,
        }]);
    })
    .enableVersioning();
;

module.exports = Encore.getWebpackConfig();
