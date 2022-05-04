/* eslint-disable */

const cssnanoConfig = {
  preset: ['default', { discardComments: { removeAll: true } }]
};

module.exports = ({ file, options }) => {
  return {
    parser: options.enabled.optimize ? 'postcss-safe-parser' : undefined,
    plugins: {
      autoprefixer: {
        add: true,
        browsers: [ 'last 2 versions', 'ie 10', 'ie 11', 'safari 8' ]
      },
      cssnano: options.enabled.optimize ? cssnanoConfig : false,
    },
  };
};
