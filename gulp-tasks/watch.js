// =============================================
// Watch 'gulp watch'
// watches for changes and runs the associated task on change
// =============================================

module.exports = function (gulp, path) {
    return function (callback) {
        gulp.watch(path.styles.source, ['styles']);
        gulp.watch(path.scripts.source, ['scripts']);
        gulp.watch(path.images.source, ['images']);
        gulp.watch(path.fonts.source, ['fonts']);
        gulp.watch(path.vendor.source, ['vendor']);
    };
};
