const { watch } = require('fs');
const path = require('path');
const { merge } = require('webpack-merge');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const commonConfig = {
    context: path.resolve(__dirname, './assets/src'),
    entry: "./index.js",
    output: {
        path: path.resolve(__dirname, "./assets/dist"),
        filename: "./js/bundle.js",
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /(node_modules)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                    }
                }
            },
            {
                test: /\.(sa|sc|c)ss$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
            },
            {
                test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [
                  {
                    loader: 'file-loader',
                    options: {
                      name: '[name].[ext]',
                      outputPath: 'fonts/'
                    }
                  }
                ]
              }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: './css/bundle.css'
        }),
    ],
    resolve: {
        extensions: ['.js', '.jsx', '.css'],
        modules: [
          'node_modules'
        ]        
    },
}

module.exports = (env, argv) => {
    const mode = argv.mode

    if (mode == undefined) {
        return merge(commonConfig, {})
    }

    /**
     * Development config
     */
    if (mode === 'development') {
        return merge(commonConfig, {
            devtool: 'inline-source-map',
            optimization: {
                minimize: false
            },
            watch: true,
        })
    }

    /**
     * Production config
     */
    if (mode === 'production') {
        return merge(commonConfig, {})
    }
}