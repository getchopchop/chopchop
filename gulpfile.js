// =============================================
// Project Settings
// edit these variables to suit your project
// =============================================

var project = {
    name: 'chopchop',
    source: './src',
    dist: './build',
    scss: 'scss',
    css: 'css',
    js: 'js',
    images: 'img',
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
        source: project.source + '/' + project.scss + '/**/*.scss',
        build: project.dist + '/' + project.css
    },
    scripts: {
        source: project.source + '/' + project.js + '/**/*.js',
        build: project.dist + '/' + project.js
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

gulp.task('vendor', require('./gulp-tasks/vendor')(gulp, nodeModule, path));

gulp.task('images', require('./gulp-tasks/images')(gulp, nodeModule, path, option));

gulp.task('scripts', require('./gulp-tasks/scripts')(gulp, nodeModule, path));

gulp.task('styles', require('./gulp-tasks/styles')(gulp, nodeModule, path, option));

gulp.task('clean', require('./gulp-tasks/clean')(nodeModule, project));

gulp.task('watch', ['browser-sync'] ,require('./gulp-tasks/watch')(gulp, path));

gulp.task('build' ,require('./gulp-tasks/build')(nodeModule));

gulp.task('default' ,require('./gulp-tasks/default')(nodeModule));
