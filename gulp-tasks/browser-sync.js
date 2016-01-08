// =============================================
// BROWSER SYNC `gulp browser-sync`
// injects css changes and auto reloads on js changes
// ** gets developer name from environment name
// =============================================

module.exports = function (nodeModule, project, environment) {
    return function () {
        if(environment.dev) {
            nodeModule.browserSync({
    	    proxy: 'http://' + project.name + '.' + nodeModule.util.env.name + '.dyn.iweb.co.uk/'
            });
        }
    };
};
