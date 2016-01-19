// =============================================
// BOWER `gulp bower`
// installs dependencies from the bower.json file
// =============================================

module.exports = function (gulp, nodeModule, path) {
    return function () {
        nodeModule.bower()
        .pipe(gulp.dest(path.bower));
    }; 
};
