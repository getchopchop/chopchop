// =============================================
// JS `gulp js`
// compiles js, Jshint, Minify if `--production`
// =============================================

module.exports = function (gulp, nodeModule, path) {
    return function () {
        gulp.src(path.scripts.source)
        .pipe(nodeModule.jsHint())
        .pipe(nodeModule.jsHint.reporter('default'))
        .pipe(nodeModule.util.env.production ? nodeModule.uglify() : nodeModule.util.noop())
        .pipe(gulp.dest(path.scripts.build))
        .pipe(nodeModule.util.env.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
    };
};
