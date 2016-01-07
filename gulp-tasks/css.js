// =============================================
// CSS `gulp css`
// compiles scss to css, autoprefixer, combines media queries and minifies if `--production`
// =============================================

module.exports = function (gulp, nodeModule, path, option, enviroment) {
    return function () {
        gulp.src(path.styles.source)
        .pipe(nodeModule.clipEmptyFiles())
        .pipe(enviroment.dev ? nodeModule.sourcemaps.init() : nodeModule.util.noop())
        .pipe(nodeModule.sass.sync().on('error', nodeModule.sass.logError))
        .pipe(nodeModule.autoPrefixer(option.autoprefixer))
        .pipe(enviroment.dev ? nodeModule.sourcemaps.write() : nodeModule.util.noop())
        .pipe(enviroment.production ? nodeModule.combineMq() : nodeModule.util.noop())
        .pipe(enviroment.production ? nodeModule.cssNano() : nodeModule.util.noop())
        .pipe(gulp.dest(path.styles.build))
        .pipe(enviroment.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
    };
};
