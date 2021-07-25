module.exports = {
    devServer: {
      proxy: {
        '^/api': {
          target: 'http://10.4.118.14/ims/api/v1/',
          changeOrigin: true,
          pathRewrite: {'^/api': ''},
          logLevel: 'debug'
        },
      }
    }
  }