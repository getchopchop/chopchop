// =============================================
// CSS `gulp css`
// compiles scss to css, autoprefixer, combines media queries and minifies if `--production`
// =============================================

module.exports = function (gulp, nodeModule, path, option, environment) {
    return function () {
        gulp.src(path.styles.source)
        .pipe(nodeModule.plumber())
        .pipe(nodeModule.clipEmptyFiles())
        .pipe(environment.dev ? nodeModule.sourcemaps.init() : nodeModule.util.noop())
        .pipe(nodeModule.sass.sync().on('error', nodeModule.sass.logError))
        .pipe(nodeModule.autoPrefixer(option.autoprefixer))
        .pipe(environment.production ? nodeModule.combineMq() : nodeModule.util.noop())
        .pipe(environment.production ? nodeModule.cssNano() : nodeModule.util.noop())
        .pipe(environment.dev ? nodeModule.sourcemaps.write() : nodeModule.util.noop())
        .pipe(nodeModule.plumber.stop())
        .pipe(gulp.dest(path.styles.build))
        .pipe(environment.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
    };
};
