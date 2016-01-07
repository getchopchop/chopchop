// =============================================
// Project Settings
// edit these variables to suit your project
// =============================================

var project = {
    name: 'chopchop',
    source: './src',
    dist: './build',
    styles: 'styles',
    scripts: 'scripts',
    images: 'images',
    fonts: 'fonts',
    vendor: 'vendor',
    bower: './build/bower_components',
};

// =============================================
// Options
// edit these variables to suit your project
// =============================================

var option = {
    autoprefixer: ['last 2 versions'],
    imageOptimisation: {
        optimizationLevel: 3,   // PNG (Between 0 - 7)
        progressive: true,      // JPG
        interlaced: true        // GIF
    }
};

// =============================================
// Dependencies
// =============================================

var gulp = require('gulp'),
    nodeModule = {
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
        cssNano:            require('gulp-cssnano'),
        uglify:             require('gulp-uglify'),
        changed:            require('gulp-changed'),
        sourcemaps:         require('gulp-sourcemaps')
    };

// =============================================
// Enviroment Variables
// =============================================

var dev = nodeModule.util.env.dev,
    production = nodeModule.util.env.production;

// =============================================
// Paths
// =============================================

var scss = {
        source: project.source + '/' + project.styles + '/**/*.scss',
        build: project.dist + '/' + project.styles
    },
    js = {
        source: project.source + '/' + project.scripts + '/**/*.js',
        build: project.dist + '/' + project.scripts
    },
    img = {
        source: project.source + '/' + project.images + '/**/*.*',
        build: project.dist + '/' + project.images
    },
    fonts = {
        source: project.source + '/' + project.fonts + '/**/*.*',
        build: project.dist + '/' + project.fonts
    },
    vendor = {
        source: project.source + '/' + project.vendor + '/**/*.*',
        build: project.dist + '/' + project.vendor
    },
    bower = './' + project.bower;

// =============================================
// Gulp Tasks
// =============================================

gulp.task('bower', require('./gulp-tasks/bower')(gulp, nodeModule, project));

// =============================================
// BROWSER SYNC `gulp browser-sync`
// injects css changes and auto reloads on js changes
// ** gets developer name from enviroment name
// =============================================

gulp.task('browser-sync', function() {
    if(dev) {
        nodeModule.browserSync({
	    proxy: 'http://' + project.name + '.' + nodeModule.util.env.name + '.dyn.iweb.co.uk/'
        });
    }
});

// =============================================
// FONTS `gulp fonts`
// moves fonts to build directory
// =============================================

gulp.task('fonts', function() {
    return gulp.src(fonts.source)
        .pipe(nodeModule.changed(fonts.build))
        .pipe(gulp.dest(fonts.build));
});

// =============================================
// VENDOR `gulp vendor`
// moves vendor to build directory
// =============================================

gulp.task('vendor', function() {
    return gulp.src(vendor.source)
        .pipe(nodeModule.changed(vendor.build))
        .pipe(gulp.dest(vendor.build));
});

// =============================================
// IMG `gulp img`
// minifys images
// =============================================

gulp.task('img', function() {
    return gulp.src(img.source)
        .pipe(nodeModule.changed(img.build))
        .pipe(nodeModule.util.env.production ? nodeModule.imageMin(option.imageOptimisation) : nodeModule.util.noop())
        .pipe(gulp.dest(img.build));
});

// =============================================
// JS `gulp js`
// compiles js, Jshint, Minify if `--production`
// =============================================

gulp.task('js', function() {
    return gulp.src(js.source)
        .pipe(nodeModule.jsHint())
        .pipe(nodeModule.jsHint.reporter('default'))
        .pipe(nodeModule.util.env.production ? nodeModule.uglify() : nodeModule.util.noop())
        .pipe(gulp.dest(js.build))
        .pipe(nodeModule.util.env.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
});

// =============================================
// CSS `gulp css`
// compiles scss to css, autoprefixer, combines media queries and minifies if `--production`
// =============================================

gulp.task('css', function() {
    return gulp.src(scss.source)
        .pipe(nodeModule.clipEmptyFiles())
        .pipe(nodeModule.util.env.dev ? nodeModule.sourcemaps.init() : nodeModule.util.noop())
        .pipe(nodeModule.sass.sync().on('error', nodeModule.sass.logError))
        .pipe(nodeModule.autoPrefixer(option.autoprefixer))
        .pipe(nodeModule.util.env.dev ? nodeModule.sourcemaps.write() : nodeModule.util.noop())
        .pipe(nodeModule.util.env.production ? nodeModule.combineMq() : nodeModule.util.noop())
        .pipe(nodeModule.util.env.production ? nodeModule.cssNano() : nodeModule.util.noop())
        .pipe(gulp.dest(scss.build))
        .pipe(nodeModule.util.env.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
});

// =============================================
// Clean `gulp clean
// destroys the build directory
// =============================================

gulp.task('clean', function(cb) {
    return nodeModule.del([project.dist], cb);
});

// =============================================
// Watch 'gulp watch'
// watches for changes and runs the associated task on change
// =============================================

gulp.task('watch', ['browser-sync'], function(cb) {
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
    nodeModule.runSequence('clean', ['bower', 'css', 'js', 'img', 'fonts', 'vendor'], cb);
});

// =============================================
// Default 'gulp'
// runs build task, then runs watche task
// =============================================

gulp.task('default', function(cb) {
    nodeModule.runSequence('build', 'watch', cb);
});
