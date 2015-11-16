// =============================================
// Project Settings
// edit these variables to suit your project
// **this is the only section you should need to edit
// =============================================

var sourceDirectory = './src',
    buildDirectory = './build',
    scssFolder = 'scss',
    cssFolder = 'css',
    jsFolder = 'js',
    imagesFolder = 'img',
    fontsFolder = 'fonts',
    vendorFolder = 'vendor',
    bowerFolder = './build/bower_components',
    url = 'chopchop.NAME.dyn.iweb.co.uk',
    autoprefixer = ['last 2 versions'],
    imageOptimisation = {
        optimizationLevel: 3,   // PNG (Between 0 - 7)
        progressive: true,      // JPG
        interlaced: true        // GIF
    };

// =============================================
// Dependencies
// =============================================

var gulp = require('gulp'),
    plugin = require('gulp-load-plugins')(),
    del = require('del'),
    runSequence = require('run-sequence'),
    browserSync = require('browser-sync').create();

// =============================================
// Paths
// =============================================

var scss = {
        source: sourceDirectory + '/' + scssFolder + '/**/*.scss',
        build: buildDirectory + '/' + cssFolder
    },
    js = {
        source: [
            sourceDirectory + '/' + jsFolder + '/**/*.js',
            '!' + sourceDirectory + '/' + jsFolder + '/**/_*.js',
        ],
        build: buildDirectory + '/' + jsFolder
    },
    img = {
        source: sourceDirectory + '/' + imagesFolder + '/**/*',
        build: buildDirectory + '/' + imagesFolder
    },
    fonts = {
        source: sourceDirectory + '/' + fontsFolder + '/**/*',
        build: buildDirectory + '/' + fontsFolder
    },
    vendor = {
        source: sourceDirectory + '/' + vendorFolder + '/**/*',
        build: buildDirectory + '/' + vendorFolder
    },
    bower = './' + bowerFolder;

// =============================================
// BROWSER SYNC `gulp browser-sync`
// sync injection and auto reloads the browser
// =============================================

gulp.task('browser-sync', function() {
    browserSync.init(null, {
        proxy: url,
        open: false
    });
});

// =============================================
// BOWER `gulp bower`
// installs dependencies from the bower.json file
// =============================================

gulp.task('bower', function() {
    return plugin.bower()
        .pipe(gulp.dest(bower));
});

// =============================================
// FONTS `gulp fonts`
// moves fonts to build directory
// =============================================

gulp.task('fonts', function() {
    return gulp.src(fonts.source)
        .pipe(gulp.dest(fonts.build));
});

// =============================================
// VENDOR `gulp vendor`
// moves vendor to build directory
// =============================================

gulp.task('vendor', function() {
    return gulp.src(vendor.source)
        .pipe(gulp.dest(vendor.build + '/vendor'))
});

// =============================================
// IMG `gulp img`
// minifys images
// =============================================

gulp.task('img', function() {
    return gulp.src(img.source)
        .pipe(plugin.imagemin(imageOptimisation))
        .pipe(gulp.dest(img.build));
});

// =============================================
// JS `gulp js`
// compiles js, Jshint, Minify if `--production`
// ** does not compile files with `_FILENAME`
// =============================================

gulp.task('js', function() {
    return gulp.src(js.source)
        .pipe(plugin.jshint())
        .pipe(plugin.jshint.reporter('default'))
        .pipe(!plugin.util.env.production ? plugin.sourcemaps.init() : plugin.util.noop())
        .pipe(plugin.include())
        .pipe(!plugin.util.env.production ? plugin.sourcemaps.write() : plugin.util.noop())
        .pipe(plugin.util.env.production ? plugin.uglify() : plugin.util.noop())
        .pipe(gulp.dest(js.build))
        .pipe(browserSync.reload({stream: true}));
});

// =============================================
// CSS `gulp css`
// compiles scss to css, autoprefixer, combines media queries and minifies if `--production`
// =============================================

gulp.task('css', function() {
    return gulp.src(scss.source)
        .pipe(plugin.clipEmptyFiles())
        .pipe(!plugin.util.env.production ? plugin.sourcemaps.init() : plugin.util.noop())
        .pipe(plugin.sass())
        .pipe(plugin.autoprefixer(autoprefixer))
        .pipe(!plugin.util.env.production ? plugin.sourcemaps.write() : plugin.util.noop())
        .pipe(plugin.util.env.production ? plugin.combineMq() : plugin.util.noop())
        .pipe(plugin.util.env.production ? plugin.minifyCss() : plugin.util.noop())
        .pipe(gulp.dest(scss.build))
        .pipe(browserSync.reload({stream: true}));
});

// =============================================
// Clean `gulp clean
// destroys the build directory
// =============================================

gulp.task('clean', function(cb) {
    return del([buildDirectory], cb);
});

// =============================================
// Watch 'gulp watch'
// watches for changes and runs the associated task on change
// =============================================

gulp.task('watch', function(cb) {
    runSequence('browser-sync', cb);
    gulp.watch(scss.source, ['css']);
    gulp.watch(js.source, ['js']);
    gulp.watch(img.source, ['img']);
    gulp.watch(fonts.source, ['fonts']);
    gulp.watch(vendor.source, ['vendor']);
});

// =============================================
// Build 'gulp build'
// builds all assets, also has `--production` option to build production ready assets
// =============================================

gulp.task('build', function(cb) {
    runSequence('clean', 'bower', 'css', 'js', 'img', 'fonts', 'vendor', cb);
});

// =============================================
// Default 'gulp'
// runs build task, then runs watche task
// =============================================

gulp.task('default', function(cb) {
    runSequence('build', 'watch', cb);
});
