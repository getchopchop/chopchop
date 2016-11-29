/**
 * gulpfile.js
 *
 * Available tasks:
 *    `gulp`
 *    `gulp watch`
 *
 * Modules:
 *     gulp                       : The streaming build system.
 *     gulp-util                  : Utility functions for gulp plugins.
 *     fs                         : File System.
 *     del                        : Delete files and folders.
 *     path                       : Node.JS path module.
 *     merge-stream               : Create a stream that emits events from
 *                                  multiple other streams.
 *     gulp-gulp-clip-empty-files : Clip empty files from stream.
 *     gulp-changed               : Only pass through changed files.
 *     gulp-imagemin              : Minify PNG, JPEG, GIF and SVG images.
 *     gulp-svg-sprite            : Reads in a bunch of SVG files, optimizes
 *                                  them and creates SVG sprites and CSS
 *                                  resources in various flavours.
 *     gulp-jshint                : JSHint plugin for Gulp.
 *     gulp-uglify                : Minify files with UglifyJS.
 *     gulp-sass                  : Gulp plugin for sass.
 *     gulp-autoprefixer          : Prefix CSS.
 *     gulp-combine-mq            : Gulp plugin for node-combine-mq.
 *     gulp-cssnano               : Minify CSS with cssnano.
 */
var gulp = require('gulp');
var $ = {
    util          : require('gulp-util'),
    fs            : require('fs'),
    del           : require('del'),
    path          : require('path'),
    mergeStream   : require('merge-stream'),
    clipEmptyFiles: require('gulp-clip-empty-files'),
    changed       : require('gulp-changed'),
    imageMin      : require('gulp-imagemin'),
    svgSprite     : require('gulp-svg-sprite'),
    jsHint        : require('gulp-jshint'),
    uglify        : require('gulp-uglify'),
    sass          : require('gulp-sass'),
    autoPrefixer  : require('gulp-autoprefixer'),
    combineMq     : require('gulp-combine-mq'),
    cssNano       : require('gulp-cssnano')
};

/**
 * Config
*/
var root = {
    src: './src',
    dest: './build'
};

var tasks = {
    clean: {
    },
    vendor: {
        src: 'vendor',
        dest: 'vendor'
    },

    images: {
        src: 'img',
        dest: 'img',
        exclude: 'img/vectors',
        extensions: [
            'jpg',
            'png',
            'svg',
            'gif'
        ],
        plugins: {
            imageMin: {
                optimizationLevel: 3,
                progressive: true,
                interlaced: true
            }
        }
    },

    svgSprite: {
        src: 'img/vectors',
        dest: 'img/vectors',
        extensions: [
            'svg'
        ],
        plugins: {
            svgSprite: {
                shape: {
                    dest: 'svg'
                },
                mode: {
                    view: false,
                    symbol: {
                        sprite: 'sprite-symbol.svg'
                    }
                }
            }
        }
    },

    js: {
        src: 'js',
        dest: 'js',
        extensions: [
            'js'
        ]
    },

    css: {
        src: 'scss',
        dest: 'css',
        extensions: [
            'scss'
        ],
        plugins: {
            autoPrefixer: [
                'last 2 versions'
            ],
            cssNano: {
                zindex: false,
                reduceIdents: false,
                mergeIdents: false,
                discardUnused: false
            }
        }
    }
};

/**
 * Returns list of sub folders within a directory
 * @param {string} str - path to directory
 * @return {array} array
*/
function getFolders(dir) {
    return $.fs.readdirSync(dir)
        .filter(function(file) {
            return $.fs.statSync($.path.join(dir, file)).isDirectory();
        });
}

/**
 * Deletes dist directory
*/
function clean() {
    return $.del([
        root.dest
    ]);
}

/**
 * Moves vendor files to the dist directory
*/
function vendor() {
    return gulp.src(root.src + '/' + tasks.vendor.src + '/**/*')
        .pipe($.changed(root.dest + '/' + tasks.vendor.dest))
        .pipe(gulp.dest(root.dest + '/' + tasks.vendor.dest + '/'));
}

/**
 * Minifies images and moves processed files to the dist directory.
*/
function images() {
    return gulp.src([
            root.src + '/' + tasks.images.src + '/**/*',
            '!' + root.src + '/' + tasks.images.exclude + '/**/*'
        ])
        .pipe($.changed(root.dest + '/' + tasks.images.dest))
        .pipe($.util.env.production ? $.imageMin(tasks.images.plugins.imageMin) : $.util.noop())
        .pipe(gulp.dest(root.dest + '/' + tasks.images.dest + '/'));
}

/**
 * Merges SVGs into sprite and moves processed files to the dist directory
*/
function svgSprite() {

    var folders = getFolders(root.src + '/' + tasks.svgSprite.src);

    var streams = folders.map(function(folder) {
        return gulp.src($.path.join(root.src + '/' + tasks.svgSprite.src + '/', folder, '/**/*.' + tasks.svgSprite.extensions))
            .pipe($.svgSprite(tasks.svgSprite.plugins.svgSprite))
            .pipe(gulp.dest(root.dest + '/' + tasks.svgSprite.dest + '/' + folder + '/'));
    });

    return $.mergeStream(streams);
}

/**
 * JSHint and minify javascript files and moves processed files to the dist
 directory
*/
function js() {
    return gulp.src(root.src + '/' + tasks.js.src +  '/**/*.' + tasks.js.extensions)
        .pipe($.jsHint())
        .pipe($.jsHint.reporter('default'))
        .pipe($.util.env.production ? $.uglify() : $.util.noop())
        .pipe(gulp.dest(root.dest + '/' + tasks.js.dest + '/'));
}

/**
 * Clips empty files, AutoPrefixes css, combines media queries, minifes css and
 * moves processed files to the dist directory
*/
function css() {
    return gulp.src(root.src + '/' + tasks.css.src + '/**/*.' + tasks.css.extensions)
        .pipe($.clipEmptyFiles())
        .pipe(!$.util.env.production ? $.sass.sync().on('error', $.sass.logError) : $.util.noop())
        .pipe($.util.env.production ? $.sass.sync() : $.util.noop())
        .pipe($.autoPrefixer(tasks.css.plugins.autoPrefixer))
        .pipe($.util.env.production ? $.combineMq() : $.util.noop())
        .pipe($.util.env.production ? $.cssNano(tasks.css.plugins.cssNano) : $.util.noop())
        .pipe(gulp.dest(root.dest + '/' + tasks.css.dest + '/'));
}

/**
 * Watches files for changes
*/
function watch() {
    gulp.watch(root.src + '/' + tasks.vendor.src + '/**/*', vendor);
    gulp.watch(root.src + '/' + tasks.images.src + '/**/*', images);
    gulp.watch(root.src + '/' + tasks.svgSprite.src + '/**/*', svgSprite);
    gulp.watch(root.src + '/' + tasks.js.src + '/**/*', js);
    gulp.watch(root.src + '/' + tasks.css.src + '/**/*', css);
}

/**
 * Combines clean, vendor, images, svgSprite, js and css tasks.
*/
var build = gulp.series(
    clean,
    gulp.parallel(
        vendor,
        gulp.series(
            images,
            svgSprite
        ),
        js,
        css
    )
);

/**
 * Gulp tasks
*/
exports.default = build;
exports.watch = watch;
