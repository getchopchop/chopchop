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
     bowerDir: 'bower_components' ,
    dest: 'build',
    src: 'src',
    vendor: 'vendor',
    browserSyncDest: ['*', 'src/**/*'],
    browserSyncProxy: 'booster.dredfern.dyn.iweb.co.uk'
};


// =============================================
// Bower files to fetch
// =============================================

var bowerFiles = [
    config.bowerDir + '/modernizer/modernizr.js',
    config.bowerDir + '/enquire/dist/enquire.js',
    config.bowerDir + '/jquery/dist/jquery.js',
    config.bowerDir + '/normalize.css/normalize.css'
];


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
// Bower move
// =============================================

gulp.task('bower-move', ['bower-install'], function() { 
    return gulp.src(bowerFiles) 
        .pipe(gulp.dest(config.vendor))
        .pipe(plugin.notify({
            message: 'Bower moved task complete',
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
        .pipe(plugin.minifyCss())
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
            config.vendor
        ], cb);
});


// =============================================
// Run build
// =============================================

gulp.task('default', ['clean', 'bower-install', 'bower-move'], function() {
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
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: true
        }
    });

    // Watch any files in dist/, reload on change
    gulp.watch([config.browserSyncDest]).on('change', browserSync.reload);
});
