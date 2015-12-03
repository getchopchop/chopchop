// =============================================
// Project Settings
// edit these variables to suit your project
// **this is the only section you should need to edit
// =============================================

var name = 'chopchop',          // Used for DYN
    sourceDirectory = './src',
    buildDirectory = './build',
    scssFolder = 'scss',
    cssFolder = 'css',
    jsFolder = 'js',
    imagesFolder = 'img',
    fontsFolder = 'fonts',
    vendorFolder = 'vendor',
    bowerFolder = './build/bower_components',
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
    plugin = {
        util:               require('gulp-util'),
        browserSync:        require('browser-sync'),
        bower:              require('gulp-bower'),
        del:                require('del'),
        runSequence:        require('run-sequence'),
        imageMin:           require('gulp-imagemin'),
        sass:               require('gulp-sass'),
        autoPrefixer:       require('gulp-autoprefixer'),
        clipEmptyFiles:     require('gulp-clip-empty-files'),
        combineMq:          require('gulp-combine-mq'),
        jsHint:             require('gulp-jshint'),
        minifyCss:          require('gulp-minify-css'),
        uglify:             require('gulp-uglify')
    };

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
// injects css changes and auto reloads on js changes
// ** gets developer name from enviroment name
// =============================================

gulp.task('browser-sync', function() {
    plugin.browserSync({
	    proxy: 'http://' + name + '.' + plugin.util.env.name + '.dyn.iweb.co.uk/'
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
        .pipe(gulp.dest(vendor.build))
});

// =============================================
// IMG `gulp img`
// minifys images
// =============================================

gulp.task('img', function() {
    return gulp.src(img.source)
        .pipe(plugin.imageMin(imageOptimisation))
        .pipe(gulp.dest(img.build));
});

// =============================================
// JS `gulp js`
// compiles js, Jshint, Minify if `--production`
// ** does not compile files with `_FILENAME`
// =============================================

gulp.task('js', function() {
    return gulp.src(js.source)
        .pipe(plugin.jsHint())
        .pipe(plugin.jsHint.reporter('default'))
        .pipe(plugin.util.env.production ? plugin.uglify() : plugin.util.noop())
	.pipe(gulp.dest(js.build));
});

// =============================================
// CSS `gulp css`
// compiles scss to css, autoprefixer, combines media queries and minifies if `--production`
// =============================================

gulp.task('css', function() {
    return gulp.src(scss.source)
        .pipe(plugin.clipEmptyFiles())
        .pipe(plugin.sass.sync().on('error', plugin.sass.logError))
        .pipe(plugin.autoPrefixer(autoprefixer))
        .pipe(plugin.util.env.production ? plugin.combineMq() : plugin.util.noop())
        .pipe(plugin.util.env.production ? plugin.minifyCss() : plugin.util.noop())
	.pipe(gulp.dest(scss.build));
});

// =============================================
// Clean `gulp clean
// destroys the build directory
// =============================================

gulp.task('clean', function(cb) {
    return plugin.del([buildDirectory], cb);
});

// =============================================
// Watch 'gulp watch'
// watches for changes and runs the associated task on change
// =============================================

gulp.task('watch', function(cb) {
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
    plugin.runSequence('clean', 'bower', 'css', 'js', 'img', 'fonts', 'vendor', cb);
});

// =============================================
// Default 'gulp'
// runs build task, then runs watche task
// =============================================

gulp.task('default', function(cb) {
    plugin.runSequence('build', 'watch', cb);
});
