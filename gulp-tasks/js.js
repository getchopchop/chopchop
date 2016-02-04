// =============================================
// JS `gulp js`
// compiles js, Jshint, Minify if `--production`
// =============================================

module.exports = function (gulp, nodeModule, path, environment) {
    return function () {
        gulp.src(path.scripts.source)
        .pipe(nodeModule.plumber())
        .pipe(nodeModule.jsHint())
        .pipe(nodeModule.jsHint.reporter('default'))
        .pipe(environment.production ? nodeModule.uglify() : nodeModule.util.noop())
        .pipe(nodeModule.plumber.stop())
        .pipe(gulp.dest(path.scripts.build))
        .pipe(environment.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
    };
};
