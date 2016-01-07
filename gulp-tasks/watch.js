// =============================================
// Watch 'gulp watch'
// watches for changes and runs the associated task on change
// =============================================

module.exports = function (gulp, path) {
    return function (callback) {
        gulp.watch(path.styles.source, ['css']);
        gulp.watch(path.scripts.source, ['js']);
        gulp.watch(path.images.source, ['img']);
        gulp.watch(path.fonts.source, ['fonts']);
        gulp.watch(path.vendor.source, ['vendor']);
    };
};
