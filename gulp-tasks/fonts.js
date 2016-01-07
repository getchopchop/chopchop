// =============================================
// FONTS `gulp fonts`
// moves fonts to build directory
// =============================================

module.exports = function (gulp, nodeModule, fonts) {
    return function () {
        gulp.src(fonts.source)
        .pipe(nodeModule.changed(fonts.build))
        .pipe(gulp.dest(fonts.build));
    };
};
