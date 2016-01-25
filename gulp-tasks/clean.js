// =============================================
// Clean `gulp clean
// destroys the build directory
// =============================================

module.exports = function (nodeModule, project) {
    return function (callback) {
       return nodeModule.del([project.dist], callback);
    };
};
