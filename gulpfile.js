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
    bower: 'bower_components',
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

var enviroment = {
    dev: nodeModule.util.env.dev,
    production: nodeModule.util.env.production
};

// =============================================
// Paths
// =============================================

var path = {
    styles: {
        source: project.source + '/' + project.styles + '/**/*.scss',
        build: project.dist + '/' + project.styles
    },
    scripts: {
        source: project.source + '/' + project.scripts + '/**/*.js',
        build: project.dist + '/' + project.scripts
    },
    images: {
        source: project.source + '/' + project.images + '/**/*.*',
        build: project.dist + '/' + project.images
    },
    fonts: {
        source: project.source + '/' + project.fonts + '/**/*.*',
        build: project.dist + '/' + project.fonts
    },
    vendor: {
        source: project.source + '/' + project.vendor + '/**/*.*',
        build: project.dist + '/' + project.vendor
    },
    bower: project.dist + '/' + project.bower
};

// =============================================
// Gulp Tasks
// =============================================

gulp.task('browser-sync', require('./gulp-tasks/browser-sync')(nodeModule, project, enviroment));

gulp.task('bower', require('./gulp-tasks/bower')(gulp, nodeModule, path));

gulp.task('fonts', require('./gulp-tasks/fonts')(gulp, nodeModule, path));

// =============================================
// VENDOR `gulp vendor`
// moves vendor to build directory
// =============================================

gulp.task('vendor', function() {
    return gulp.src(path.vendor.source)
        .pipe(nodeModule.changed(path.vendor.build))
        .pipe(gulp.dest(path.vendor.build));
});

// =============================================
// IMG `gulp img`
// minifys images
// =============================================

gulp.task('img', function() {
    return gulp.src(path.images.source)
        .pipe(nodeModule.changed(path.images.build))
        .pipe(nodeModule.util.env.production ? nodeModule.imageMin(option.imageOptimisation) : nodeModule.util.noop())
        .pipe(gulp.dest(path.images.build));
});

// =============================================
// JS `gulp js`
// compiles js, Jshint, Minify if `--production`
// =============================================

gulp.task('js', function() {
    return gulp.src(path.scripts.source)
        .pipe(nodeModule.jsHint())
        .pipe(nodeModule.jsHint.reporter('default'))
        .pipe(nodeModule.util.env.production ? nodeModule.uglify() : nodeModule.util.noop())
        .pipe(gulp.dest(path.scripts.build))
        .pipe(nodeModule.util.env.dev ? nodeModule.browserSync.reload({stream: true}) : nodeModule.util.noop());
});

// =============================================
// CSS `gulp css`
// compiles scss to css, autoprefixer, combines media queries and minifies if `--production`
// =============================================

gulp.task('css', function() {
    return gulp.src(path.styles.source)
        .pipe(nodeModule.clipEmptyFiles())
        .pipe(nodeModule.util.env.dev ? nodeModule.sourcemaps.init() : nodeModule.util.noop())
        .pipe(nodeModule.sass.sync().on('error', nodeModule.sass.logError))
        .pipe(nodeModule.autoPrefixer(option.autoprefixer))
        .pipe(nodeModule.util.env.dev ? nodeModule.sourcemaps.write() : nodeModule.util.noop())
        .pipe(nodeModule.util.env.production ? nodeModule.combineMq() : nodeModule.util.noop())
        .pipe(nodeModule.util.env.production ? nodeModule.cssNano() : nodeModule.util.noop())
        .pipe(gulp.dest(path.styles.build))
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
    gulp.watch(path.styles.source, ['css']);
    gulp.watch(path.scripts.source, ['js']);
    gulp.watch(path.images.source, ['img']);
    gulp.watch(path.fonts.source, ['fonts']);
    gulp.watch(path.vendor.source, ['vendor']);
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
