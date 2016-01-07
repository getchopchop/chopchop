// =============================================
// VENDOR `gulp vendor`
// moves vendor to build directory
// =============================================

module.exports = function (gulp, nodeModule, path) {
    return function () {
        gulp.src(path.vendor.source)
        .pipe(nodeModule.changed(path.vendor.build))
        .pipe(gulp.dest(path.vendor.build));
    };
};
