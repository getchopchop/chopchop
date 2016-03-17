// =============================================
// Project Settings
// edit these variables to suit your project
// =============================================

var project = {
    name: 'chopchop',
    source: 'src',
    dist: 'build',
    scss: 'scss',
    css: 'css',
    js: 'js',
    img: 'img',
    fonts: 'fonts',
    vendor: 'vendor'
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
        sourcemaps:         require('gulp-sourcemaps'),
        plumber:            require('gulp-plumber')
    };

// =============================================
// environment Variables
// =============================================

var environment = {
    dev: nodeModule.util.env.dev,
    production: nodeModule.util.env.production
};

// =============================================
// Paths
// =============================================

var path = {
    styles: {
        source: project.source + '/' + project.scss + '/**/*.scss',
        build: project.dist + '/' + project.css
    },
    scripts: {
        source: project.source + '/' + project.js + '/**/*.js',
        build: project.dist + '/' + project.js
    },
    images: {
        source: project.source + '/' + project.img + '/**/*',
        build: project.dist + '/' + project.img
    },
    fonts: {
        source: project.source + '/' + project.fonts + '/**/*',
        build: project.dist + '/' + project.fonts
    },
    vendor: {
        source: project.source + '/' + project.vendor + '/**/*',
        build: project.dist + '/' + project.vendor
    }
};

// =============================================
// Gulp Tasks
// =============================================

gulp.task('browser-sync', require('./gulp-tasks/browser-sync')(nodeModule, project, environment));

gulp.task('fonts', require('./gulp-tasks/fonts')(gulp, nodeModule, path));

gulp.task('vendor', require('./gulp-tasks/vendor')(gulp, nodeModule, path));

gulp.task('img', require('./gulp-tasks/img')(gulp, nodeModule, path, option, environment));

gulp.task('js', require('./gulp-tasks/js')(gulp, nodeModule, path, environment));

gulp.task('css', require('./gulp-tasks/css')(gulp, nodeModule, path, option, environment));

gulp.task('clean', require('./gulp-tasks/clean')(nodeModule, project));

gulp.task('watch', ['browser-sync'] ,require('./gulp-tasks/watch')(gulp, path));

gulp.task('build' ,require('./gulp-tasks/build')(nodeModule));

gulp.task('default' ,require('./gulp-tasks/default')(nodeModule));
