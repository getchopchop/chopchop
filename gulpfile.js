/*!
 * gulp
 * $ npm install gulp-ruby-sass gulp-autoprefixer gulp-minify-css gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-notify gulp-rename gulp-livereload gulp-cache del --save-dev
 */

// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del'),
    sourcemaps = require('gulp-sourcemaps');


// Locations
var styleSrc = 'src/scss/styles.scss',
    styleDest = 'public_html/css',
    styleWatch = 'src/scss/**/*.scss',

    imageSrc = 'src/images/**/*',
    imageDest = 'public_html/images',
    imageWatch = 'src/images/**/*',

    scriptSrc = 'src/js/*.js',
    scriptDest = 'public_html/js',
    scriptWatch = 'src/js/**/*.js',

    thirdScriptSrc = 'src/js/*/*.js',
    thirdScriptDest = 'public_html/js',
    thirdScriptWatch = 'src/js/**/*.js',

    liveReloadDest = 'public_html/**';


// Styles
gulp.task('styles', function() {
    gulp.src(styleSrc)
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(autoprefixer('last 3 version'))
        .pipe(gulp.dest(styleDest))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(minifycss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(styleDest))
        .pipe(notify({
            message: 'Styles task complete'
        }));
});


// Scripts
gulp.task('scripts', function() {
    return gulp.src(scriptSrc)
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(concat('script.js'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(uglify())
        .pipe(gulp.dest(scriptDest))
        .pipe(notify({
            message: 'Scripts task complete'
        }));
});


// Third Party Scripts - no jshint and only min files
gulp.task('third-scripts', function() {
    return gulp.src(thirdScriptSrc)
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(uglify())
        .pipe(gulp.dest(thirdScriptDest))
        .pipe(notify({
            message: 'Scripts task complete'
        }));
});


// Images
gulp.task('images', function() {
    return gulp.src(imageSrc)
        .pipe(imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        }))
        .pipe(gulp.dest(imageDest))
        .pipe(notify({
            message: 'Images task complete'
        }));
});


// Clean
gulp.task('clean', function(cb) {
    del([styleDest, scriptDest, imageDest], cb)
});


// Default task
gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'third-scripts', 'images');
});


// Watch
gulp.task('watch', function() {
    // Watch lots of function
    gulp.watch(styleWatch, ['styles']);
    gulp.watch(scriptWatch, ['scripts']);
    gulp.watch(scriptWatch, ['third-scripts']);
    gulp.watch(imageWatch, ['images']);

    // Create LiveReload server
    livereload.listen();

    // Watch any files in dist/, reload on change
    gulp.watch([liveReloadDest]).on('change', livereload.changed);
});
