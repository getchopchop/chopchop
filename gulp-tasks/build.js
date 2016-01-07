// =============================================
// Build 'gulp build'
// builds all assets, also has `--production` option to build production ready assets
// =============================================

module.exports = function (nodeModule) {
    return function (callback) {
        nodeModule.runSequence('clean', ['bower', 'styles', 'scripts', 'images', 'fonts', 'vendor'], callback);
    };
};
