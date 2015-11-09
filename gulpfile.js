// =============================================
// Dependencies
// =============================================

var gulp = require('gulp'),
    del = require('del'),
    plugin = require('gulp-load-plugins')();

// =============================================
// Paths
// =============================================

var basePath = {
	src: './src',
    dist: './build',
    bowerDir: './build/bower_components'
};

var path = {
    scss: basePath.src + '/scss/**/*.scss',
    js: basePath.src + '/js/**/*.js',
    img: [
        basePath.src + '/img/**/*.png',
        basePath.src + '/img/**/*.jpg',
        basePath.src + '/img/**/*.jpeg',
        basePath.src + '/img/**/*.gif',
        basePath.src + '/img/**/*.svg'
    ],
    fonts: [
        basePath.src + '/font/**/*.eot',
        basePath.src + '/font/**/*.otf',
        basePath.src + '/font/**/*.ttf',
        basePath.src + '/font/**/*.woff',
        basePath.src + '/font/**/*.svg'
    ],
    vendor: basePath.src + '/vendor/**/*'
}

// =============================================
// Options
// =============================================

var option = {
    autoprefixer: [
        'last 2 version',
        'safari 5',
        'opera 12.1',
        'ios 6',
        'android 4'
    ],
    imageopt: {
        optimizationLevel: 3,   // (PNG) Between 0 - 7
        progressive: true,      // (JPG)
        interlaced: true        // (GIF)
    }
};

// =============================================
// Environment
// =============================================

var isProduction = false;

if(plugin.util.env.production === true) {
    isProduction = true;
}

// =============================================
// BOWER `gulp bower`
// =============================================

gulp.task('bower', function() {
    return plugin.bower()
        .pipe(gulp.dest(basePath.bowerDir))
});

// =============================================
// CLEAN `gulp clean`
// =============================================

gulp.task('clean', function(cb) {
    return del([basePath.dist], cb)
});

// =============================================
// FONTS `gulp fonts`
// =============================================

gulp.task('fonts', function() {
    return gulp.src(path.fonts)
    .pipe(gulp.dest(basePath.dist + '/fonts'))
});

// =============================================
// VENDOR `gulp vendor`
// =============================================

gulp.task('vendor', function() {
    return gulp.src(path.vendor)
    .pipe(gulp.dest(basePath.dist + '/vendor'))
});

// =============================================
// IMG `gulp img`
// =============================================

gulp.task('img', function() {
    return gulp.src(path.img)
        .pipe(plugin.imagemin(option.imageopt))
        .pipe(gulp.dest(basePath.dist + '/img'));
});

// =============================================
// JS `gulp js`
// =============================================

gulp.task('js', function() {
    gulp.src(path.js)
        .pipe(plugin.jshint())
        .pipe(plugin.jshint.reporter('default'))
        .pipe(isProduction ? plugin.uglify() : plugin.util.noop())
        .pipe(gulp.dest(basePath.dist + '/js'))
});

// =============================================
// CSS `gulp css`
// =============================================

gulp.task('css', function() {
    gulp.src(path.scss)
        .pipe(plugin.sass())
        .pipe(plugin.autoprefixer(option.autoprefixer))
        .pipe(isProduction ? plugin.combineMq() : plugin.util.noop())
        .pipe(isProduction ? plugin.minifyCss() : plugin.util.noop())
        .pipe(gulp.dest(basePath.dist + '/css'))
});

// =============================================
// Watch 'gulp watch'
// =============================================

gulp.task('watch', function() {
    gulp.watch(path.scss, ['css']);
    gulp.watch(path.js, ['js']);
    gulp.watch(path.img, ['img']);
    gulp.watch(path.fonts, ['fonts']);
});

// =============================================
// Build 'gulp build'
// =============================================

gulp.task('build', ['clean'], function() {
    gulp.start('bower', 'css', 'js', 'img', 'fonts', 'vendor');
});

// =============================================
// Default 'gulp'
// =============================================

gulp.task('default', ['build', 'watch']);
