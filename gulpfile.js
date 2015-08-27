// =============================================
// Bower Dependencies
// =============================================

var gulp = require('gulp'),
    del = require('del'),
    browserSync = require('browser-sync').create(),
    plugin = require('gulp-load-plugins')();


// =============================================
// Config
// =============================================

var config = {
    bowerDir: 'bower_components',
    dest: 'build',
    src: 'src',
    vendorDir: 'vendor',
    browserSyncDest: ['*', 'src/**/*'],
    browserSyncProxy: 'primer.dredfern.dyn.iweb.co.uk'
};


// =============================================
// Bower download
// =============================================

gulp.task('bower-install', ['clean'], function() {
    return plugin.bower()
        .pipe(gulp.dest(config.bowerDir))
        .pipe(plugin.notify({
            message: 'Bower install task complete',
            onLast: true
        }));
});


// =============================================
// Styles
// =============================================

gulp.task('styles', function() {
    gulp.src(config.src + '/scss/**/*.scss')
        //.pipe(plugin.sourcemaps.init())
        .pipe(plugin.sass.sync().on('error', plugin.sass.logError))
        .pipe(plugin.autoprefixer('last 3 version'))
        .pipe(plugin.rename({
            suffix: '.min'
        }))
        //.pipe(plugin.minifyCss())
        //.pipe(plugin.sourcemaps.write())
        .pipe(gulp.dest(config.dest + '/css'))
        .pipe(plugin.notify({
            message: 'Styles task complete',
            onLast: true
        }));
});


// =============================================
// Scripts
// =============================================

gulp.task('scripts', function() {
    return gulp.src(config.src + '/js/**/*.js')
        .pipe(plugin.jshint())
        .pipe(plugin.jshint.reporter('default'))
        .pipe(plugin.rename({
            suffix: '.min'
        }))
        .pipe(plugin.uglify())
        .pipe(gulp.dest(config.dest + '/js'))
        .pipe(plugin.notify({
            message: 'Scripts task complete',
            onLast: true
        }));
});


// =============================================
// Images
// =============================================

gulp.task('images', function() {
    gulp.src(config.src + '/img/**/*')
        .pipe(plugin.changed(config.dest + '/img'))
        .pipe(plugin.imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        }))
        .pipe(gulp.dest(config.dest + '/img'))
        .pipe(plugin.notify({
            message: 'Images task complete',
            onLast: true
        }));
});


// =============================================
// Fonts
// =============================================

gulp.task('fonts', function() {
    return gulp.src(config.src + '/fonts/**/*')
        .pipe(gulp.dest(config.dest + '/fonts'))
        .pipe(plugin.notify({
            message: 'Fonts task complete',
            onLast: true
        }));
});


// =============================================
// Clean up
// =============================================

gulp.task('clean', function(cb) {
    return del([
            config.bowerDir,
            config.dest,
            config.vendorDir
        ], cb);
});


// =============================================
// Run build
// =============================================

gulp.task('default', ['clean', 'bower-install'], function() {
    gulp.start('styles', 'scripts', 'images', 'fonts');
});


// =============================================
// Watch
// =============================================

gulp.task('watch', function() {
    // Watch lots of function
    gulp.watch(config.src + '/scss/**/*.scss', ['styles']);
    gulp.watch(config.src + '/js/**/*.js', ['scripts']);
    gulp.watch(config.src + '/img/**/*', ['images']);
    gulp.watch(config.src + '/fonts/**/*', ['fonts']);

    // Create browser sync server
    browserSync.init({
        proxy: config.browserSyncProxy,
        open: false,
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: true
        }
    });

    // Watch any files in dist/, reload on change
    gulp.watch([config.browserSyncDest]).on('change', browserSync.reload);
});
