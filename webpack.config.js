'use strict';

require('es6-promise').polyfill();


var params = {
  env: process.env.NODE_ENV || 'development'
};

// Require local webpack
var webpack = require('webpack');

// Externals plugins
var plugins = {
  bower: require("bower-webpack-plugin"),
  extText: require("extract-text-webpack-plugin")
};

// PostCss plugins

var postCssPlugins = {
    autoprefixer: require("autoprefixer"),
    postcssImport: require('postcss-import'),
    cssnext: require('cssnext'),
    nested: require('postcss-nested'),
    customProperties: require("postcss-custom-properties"),
    postcssEach: require("postcss-each"),
    postcssFor: require("postcss-for"),
    postcssMedia: require("postcss-custom-media"),
    posctcssFlexBugFix: require("postcss-flexbugs-fixes"),
    postcssSvg: require("postcss-svg"),
    postcssInput: require("postcss-input-style"),
    fontMagic: require("postcss-font-magician")
};

module.exports = {
  context: __dirname + "/app",
  entry: './app',

  // Watcher
  watch: params.env == 'development',
  watchOptions: {
    aggregateTimeout: 50
  },
  devtool: params.env == 'development' ? "source-map" : null,

  // Resolve params
  resolve: {
    root: __dirname,
    modulesDirectories: [
      __dirname,
      __dirname + '/vendor',
      __dirname + '/node_modules'
    ],
    packageFiles: ['package.json', 'bower.json', '.bower.json'],
    extensions: ['', '.js', '.css']
  },

  resolveLoader: {
    root: __dirname,
    modulesDirectories: [__dirname + "/node_modules"]
  },

  // Output params
  output: {
    path: __dirname + '/build',
    filename: '[name].js',
    publicPath: './build/',
    library: 'App'
  },

  // Loaders params
  module: {
    loaders: [
      {
        test: /jquery\.js$/,
        loader: 'expose?$!expose?jQuery'
      },{
            test:   /\.css$/,
            loader:  plugins.extText.extract("postcss", 'css-loader!postcss-loader')
      }, {
        test: /\.js$/,
        exclude: /(node_modules|vendor)/,
        loader: 'babel',
        query: {
          cacheDirectory: true,
          plugins: ['transform-decorators-legacy'],
          presets: [
            require.resolve('babel-preset-es2015'),
            require.resolve('babel-preset-stage-0')
          ]
        }
      }, {
        test: /\.jpe?g$|\.gif$|\.png$|\.woff$|\.eot$|\.svg$|\.ttf$|\.wav$|\.mp3$/,
        loader: "file?name=[path][name].[ext]",
        exclude: /(icons)/
      }
    ]
  },

   postcss: function () {
       return [
           postCssPlugins.postcssImport({
               addDependencyTo: webpack
           }),
           postCssPlugins.cssnext,
           postCssPlugins.customProperties,
           postCssPlugins.nested,
           postCssPlugins.posctcssFlexBugFix,
           postCssPlugins.postcssEach,
           postCssPlugins.postcssFor,
           postCssPlugins.postcssInput,
           postCssPlugins.postcssMedia,
           postCssPlugins.postcssSvg({
             paths: ['icons'],
             defaults: "[fill]: #000000"
           }),
           postCssPlugins.autoprefixer
       ];
   },

    // Plugins
  plugins: [
    new plugins.extText('build.css', {
      allChunks: true
    }),
    new plugins.bower({
      modulesDirectories: [__dirname + '/vendor'],
      manifestFiles: ".bower.json",
      includes: /.*/,
      excludes: [],
      searchResolveModulesDirectories: true
    })
  ]
};
