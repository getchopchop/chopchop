// =============================================
// CSS `gulp css`
// compiles scss to css, autoprefixer, combines media queries and minifies if `--production`
// =============================================

module.exports = function (gulp, nodeModule, path, option) {
    return function () {
        gulp.src(path.styles.source)
        .pipe(nodeModule.clipEmptyFiles())
        .pipe(nodeModule.util.env.dev ? nodeModule.sourcemaps.init() : nodeModule.util.noop())
        .pipe(nodeModule.sass.sync().on('error', nodeModule.sass.logError))
        .pipe(nodeModule.autoPrefixer(option.autoprefixer))
        .pipe(nodeModule.util.env.dev ? nodeModule.sourcemaps.write() : nodeModule.util.noop())
        .pipe(nodeModule.util.env.production ? nodeModule.combineMq() : nodeModule.util.noop())
        .pipe(nodeModule.util.env.production ? nodeModule.cssNano() : nodeModule.util.noop())
        .pipe(gulp.dest(path.styles.build))
        .pipe(nodeModule.util.env.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
    };
};
