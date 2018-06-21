const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin')  ;
const autoprefixer = require('autoprefixer')  ;

module.exports = {
  entry: [
      './src/js/main.js',
      './src/js/library/detectmobilebrowser/detectmobilebrowser.js',
      './src/scss/style.scss'
  ],
  output: {
    filename: './dist/js/main.min.js',

  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          use: [
            {
              loader: 'css-loader',
              options: {
                sourceMap: true
              }
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true,
                plugins: () => [autoprefixer]
              }
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: true
              }
            }
          ],
          fallback: 'style-loader'
        })
      },
      {
        test: /\.(ttf|eot|woff|woff2|svg)$/,
        use: {
          loader: "file-loader",
          options: {
            name: "../src/fonts/[name].[ext]",
          },
        },
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin({
      filename: 'style.css',
      allChunks: true
    })
  ]
};