// =============================================
// JS `gulp js`
// compiles js, Jshint, Minify if `--production`
// =============================================

module.exports = function (gulp, nodeModule, path, enviroment) {
    return function () {
        gulp.src(path.scripts.source)
        .pipe(nodeModule.jsHint())
        .pipe(nodeModule.jsHint.reporter('default'))
        .pipe(enviroment.production ? nodeModule.uglify() : nodeModule.util.noop())
        .pipe(gulp.dest(path.scripts.build))
        .pipe(enviroment.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
    };
};
