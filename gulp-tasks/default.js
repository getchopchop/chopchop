// =============================================
// Default 'gulp'
// runs build task, then runs watche task
// =============================================

module.exports = function (nodeModule) {
    return function (callback) {
        nodeModule.runSequence('build', 'watch', callback);
    };
};
