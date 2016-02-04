// =============================================
// FONTS `gulp fonts`
// moves fonts to build directory
// =============================================

module.exports = function (gulp, nodeModule, path) {
    return function () {
        gulp.src(path.fonts.source)
        .pipe(nodeModule.plumber())
        .pipe(nodeModule.changed(path.fonts.build))
        .pipe(nodeModule.plumber.stop())
        .pipe(gulp.dest(path.fonts.build));
    };
};
