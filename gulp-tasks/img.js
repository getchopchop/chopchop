// =============================================
// IMG `gulp img`
// minifys images
// =============================================

module.exports = function (gulp, nodeModule, path, option, enviroment) {
    return function () {
        gulp.src(path.images.source)
        .pipe(nodeModule.changed(path.images.build))
        .pipe(enviroment.production ? nodeModule.imageMin(option.imageOptimisation) : nodeModule.util.noop())
        .pipe(gulp.dest(path.images.build));
    };
};
