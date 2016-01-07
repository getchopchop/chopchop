// =============================================
// BOWER `gulp bower`
// installs dependencies from the bower.json file
// =============================================

module.exports = function (gulp, nodeModule, project) {
    return function () {
        nodeModule.bower()
        .pipe(gulp.dest(project.bower));
    };
};
