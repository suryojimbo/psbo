const { override, fixBabelImports,
	  addLessLoader, } = require('customize-cra');

module.exports = function override(config, env){
    config = fixBabelImports(['import', { libraryName: 'antd', libraryDirectory: "es",
    	style: true }], config);
    config = addLessLoader({
    	modifyVars: { 
	          "@layout-body-background": "#FFFFFF",
	          "@layout-header-background": "#FFFFFF",
	          "@layout-footer-background": "#FFFFFF" 
      },
      javascriptEnabled: true
    })(config, env);
    return config;
};