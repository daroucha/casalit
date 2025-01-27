var Encore = require('@symfony/webpack-encore');
const CopyWebpackPlugin = require('copy-webpack-plugin');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    //.setManifestKeyPrefix('build/')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // enables @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })

    .enableSassLoader()
    //.enableTypeScriptLoader()
    //.enableIntegrityHashes(Encore.isProduction())
    .autoProvidejQuery()
    .enableVueLoader()

    .addEntry('app/style', './assets/sass/casalit.sass')
    .addEntry('app', './vue/app.js')

    .addEntry('legacy', './assets/js/app.js')

    .addPlugin(new CopyWebpackPlugin([
      { from: './assets/fonts', to: 'fonts' },
      { from: './assets/images', to: 'images' },
      { from: './assets/banner', to: 'banner' },
      // { from: './assets/favicons', to: 'favicons' },
      // { from: './assets/webmanifest.json', to: 'webmanifest.json' }
    ]))

    .addLoader({
      test: /\.svg$/,
      use: [
        {
          loader: 'vue-svg-loader'
        }
      ],
    })

    .addLoader({
      test: /\.(pdf)$/i,
      use: [
        {
          loader: 'file-loader',
          options: {
            emitFile: true
          },
        },
      ]
    })
;

module.exports = Encore.getWebpackConfig();
