// =============================================
// BROWSER SYNC `gulp browser-sync`
// injects css changes and auto reloads on js changes
// ** gets developer name from enviroment name
// =============================================

module.exports = function (nodeModule, project, enviroment) {
    return function () {
        if(enviroment.dev) {
            nodeModule.browserSync({
    	    proxy: 'http://' + project.name + '.' + nodeModule.util.env.name + '.dyn.iweb.co.uk/'
            });
        }
    };
};
