const { watch } = require('fs');
const path = require('path');
const { merge } = require('webpack-merge');

const commonConfig = {
    entry: "./assets/js/src/index.js",
    output: {
        path: path.resolve(__dirname, "./assets/js/dist"),
        filename: "bundle.js",
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
                test: /\.css$/i,
                use: ['style-loader', 'css-loader'],
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
    resolve: {
        extensions: ['.js', '.jsx', '.css'],
        modules: [
          'node_modules'
        ]        
    },
    watch: true,
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
        })
    }

    /**
     * Production config
     */
    if (mode === 'production') {
        return merge(commonConfig, {})
    }
}