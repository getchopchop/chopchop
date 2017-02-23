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
var gulp = require( 'gulp' );
var $ =
{
    util          : require( 'gulp-util'             ),
    fs            : require( 'fs'                    ),
    del           : require( 'del'                   ),
    path          : require( 'path'                  ),
    mergeStream   : require( 'merge-stream'          ),
    clipEmptyFiles: require( 'gulp-clip-empty-files' ),
    changed       : require( 'gulp-changed'          ),
    imageMin      : require( 'gulp-imagemin'         ),
    svgSprite     : require( 'gulp-svg-sprite'       ),
    jsHint        : require( 'gulp-jshint'           ),
    uglify        : require( 'gulp-uglify'           ),
    sass          : require( 'gulp-sass'             ),
    autoPrefixer  : require( 'gulp-autoprefixer'     ),
    combineMq     : require( 'gulp-combine-mq'       ),
    cssNano       : require( 'gulp-cssnano'          )
};


/**
 * Config
*/
var pathConfig =
{
    "clean":
    [
        "./build"
    ],

    "move":[
        {
            "src": "./src/vendor/**/*",
            "dist": "./build/vendor/",
            "exclude":
            [
                "!./src/vendor/**/*.js",
                "!./src/vendor/**/*.css",
                "!./src/vendor/**/*.{png,jpg,gif,svg}"
            ]
        }
    ],

    "img":
    [
        {
            "src": "./src/img/**/*.{png,jpg,gif,svg}",
            "dist": "./build/img/",
            "exclude":
            [
                "!./src/img/vector/**/*"
            ]
        },
        {
            "src": "./src/vendor/**/*.{png,jpg,gif,svg}",
            "dist": "./build/vendor/",
            "exclude": [],
            "thirdParty": true
        }
    ],

    "js":
    [
        {
            "src": "./src/js/**/*.js",
            "dist": "./build/js/",
            "exclude": []
        },
        {
            "src": "./src/vendor/**/*.js",
            "dist": "./build/vendor/",
            "exclude": [],
            "thirdParty": true
        }
    ],

    "css":
    [
        {
            "src": "./src/scss/**/*.scss",
            "dist": "./build/css/",
            "exclude": []
        },
        {
            "src": "./src/vendor/**/*.css",
            "dist": "./build/vendor/",
            "exclude": [],
            "thirdParty": true
        }
    ]
}

var taskConfig =
{
    "img":
    {
        "imagemin":
        {
            "optimizationLevel": 3,
            "progressive": true,
            "interlaced": true
        }
    },

    "svgSprite":
    {
        "svgSprite":
        {
            "shape":
            {
                "dist": "svg"
            },
            "mode":
            {
                "view": false,
                "symbol":
                {
                    "sprite": "sprite-symbol.svg"
                }
            }
        }
    },

    "js":
    {

    },

    "css":
    {
        "autoPrefixer":
        [
            "last 2 versions"
        ],
        "cssNano":
        {
            "zindex": false,
            "reduceIdents": false,
            "mergeIdents": false,
            "discardUnused": false
        }
    }
}


/**
 * Returns list of sub folders within a directory
 * @param {string} str - path to directory
 * @return {array} array
*/
function getFolders( folder ) {
    return $.fs.readdirSync( folder )
        .filter( function( file ) {
            return $.fs.statSync( $.path.join( folder, file ) ).isDirectory();
        } );
}


/**
 * Returns array of paths for gulp.src including exclude paths and multiple file extensions
 * @param {object}
 * @return {array} array
*/
function getGlob( folder )
{
    var glob = folder.exclude;
    glob.splice( 0, 0, folder.src );
    return glob;
}


/**
 * Deletes dist directory
*/
function clean()
{
    return $.del( pathConfig.clean );
}


/**
 * Moves files to the dist directory
*/
function move()
{
    var streams = pathConfig.move.map( function( folder )
    {
        return gulp.src( getGlob( folder ) )
            .pipe( $.changed( folder.dist ) )
            .pipe( gulp.dest( folder.dist ) );
    } );

    return $.mergeStream( streams );
}


/**
 * Minifies images and moves processed files to the dist directory.
*/
function img()
{
    var streams = pathConfig.img.map( function( folder )
    {
        return gulp.src( getGlob( folder ) )
            .pipe( $.changed( folder.dist ) )
            .pipe( $.util.env.production ? $.imageMin( taskConfig.img.imageMin ) : $.util.noop() )
            .pipe( gulp.dest( folder.dist ) );
    } );

    return $.mergeStream( streams );
}


/**
 * Merges SVGs into sprite and moves processed files to the dist directory
*/
function svgSprite()
{
    var folders = getFolders( "./src/img/vector/" );

    var streams = folders.map( function( folder )
    {
        return gulp.src( "./src/img/vector/" + folder + "/**/*.svg" )
            .pipe( $.svgSprite( taskConfig.svgSprite.svgSprite ) )
            .pipe( gulp.dest( "./build/img/vector/" + folder + "/" ) );
    } );

    return $.mergeStream( streams );
}


/**
 * JSHint and minify javascript files and moves processed files to the dist
 directory
*/
function js()
{
    var streams = pathConfig.js.map( function( folder )
    {
        return gulp.src(getGlob( folder ) )
            .pipe( !folder.thirdParty && !$.util.env.production ? $.jsHint(): $.util.noop() )
            .pipe( !folder.thirdParty && !$.util.env.production ? $.jsHint.reporter( 'default' ) : $.util.noop() )
            .pipe( $.util.env.production ? $.uglify() : $.util.noop() )
            .pipe( gulp.dest( folder.dist ) );
    } );

    return $.mergeStream( streams );
}


/**
 * Clips empty files, AutoPrefixes css, combines media queries, minifes css and
 * moves processed files to the dist directory
*/
function css()
{
    var streams = pathConfig.css.map( function( folder )
    {
        return gulp.src( getGlob( folder ) )
            .pipe( $.clipEmptyFiles() )
            .pipe( !$.util.env.production && !folder.thirdParty ? $.sass.sync().on( 'error', $.sass.logError ) : $.util.noop() )
            .pipe( $.util.env.production && !folder.thirdParty ? $.sass.sync() : $.util.noop() )
            .pipe( !folder.thirdParty ? $.autoPrefixer( taskConfig.css.autoPrefixer ) : $.util.noop() )
            .pipe( !folder.thirdParty ? $.combineMq() : $.util.noop() )
            .pipe( $.util.env.production ? $.cssNano( taskConfig.css.cssNano ) : $.util.noop() )
            .pipe( gulp.dest( folder.dist ) );
    } );

    return $.mergeStream( streams );
}


/**
 * Watches files for changes
*/
function watch() {
    gulp.watch(
        [
            pathConfig.move[0].src,
            pathConfig.move[0].exclude[0],
            pathConfig.move[0].exclude[1],
            pathConfig.move[0].exclude[2]
        ],
        move
    );
    gulp.watch(
        [
            pathConfig.img[0].src,
            pathConfig.img[0].exclude[0]
        ],
        img
    );
    gulp.watch(
        "./src/img/vector/",
        svgSprite
    );
    gulp.watch(
        [
            pathConfig.js[0].src,
            pathConfig.js[1].src
        ],
        js
    );
    gulp.watch(
        [
            pathConfig.css[0].src,
            pathConfig.css[1].src
        ],
        css
    );
}


/**
 * Combines clean, vendor, images, svgSprite, js and css tasks.
*/
var build = gulp.series(
    clean,
    gulp.parallel(
        move,
        gulp.series(
            img,
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
