// =============================================
// IMG `gulp img`
// minifys images
// =============================================

module.exports = function (gulp, nodeModule, path, option, environment) {
    return function () {
        gulp.src(path.images.source)
        .pipe(nodeModule.plumber())
        .pipe(nodeModule.changed(path.images.build))
        .pipe(environment.production ? nodeModule.imageMin(option.imageOptimisation) : nodeModule.util.noop())
        .pipe(nodeModule.plumber.stop())
        .pipe(gulp.dest(path.images.build));
    };
};
