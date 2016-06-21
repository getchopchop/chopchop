// =============================================
// Project Settings
// edit these variables to suit your project
// **this and the options object are the only sections you should need to edit
// =============================================

var project = {
    name: 'chopchop',
    sourceDirectory: './src',
    distDirectory: './build',
    stylesDirectory: 'scss',
    scriptsDirectory: 'js',
    imagesDirectory: 'img',
    iconsDirectory: '/img/icons',
    vendorDirectory: 'vendor'
};


// =============================================
// Project Options
// edit these variables to suit your project
// **this and the project object are the only sections you should need to edit
// =============================================

var option = {
    autoprefixer: [ 'last 2 versions' ],
    cssNano: {
        zindex: false,
        reduceIdents: false,
        mergeIdents: false,
        discardUnused: false
    },
    imageOptimisation: {
        optimizationLevel: 3,           // PNG (Between 0 - 7)
        progressive: true,              // JPG
        interlaced: true                // GIF
    },
    svgSpriteConfig: {
        shape: {
            dimension: {                // Set maximum dimensions
                maxWidth: 32,
                maxHeight: 32
            },
            dest: 'intermediate-svg'    // Keep the intermediate files
        },
        mode: {
            view: {                     // Activate the «view» mode
                bust: false,
                render: {
                    scss: true          // Activate Sass output (with default options)
                }
            },
            symbol: true                // Activate the «symbol» mode
        }
    }
};


// =============================================
// Dependencies
// =============================================

var gulp = require('gulp' ),
    nodeModule = {
        util:               require( 'gulp-util' ),
        del:                require( 'del' ),
        changed:            require( 'gulp-changed' ),
        imageMin:           require( 'gulp-imagemin' ),
        sass:               require( 'gulp-sass' ),
        autoPrefixer:       require( 'gulp-autoprefixer' ),
        clipEmptyFiles:     require( 'gulp-clip-empty-files' ),
        combineMq:          require( 'gulp-combine-mq' ),
        jsHint:             require( 'gulp-jshint' ),
        cssNano:            require( 'gulp-cssnano' ),
        uglify:             require( 'gulp-uglify' ),
        sourcemaps:         require( 'gulp-sourcemaps' ),
        svgSprite:          require('gulp-svg-sprite'),
        path:               require( 'path' )
    };


// =============================================
// Environment Variables
// =============================================

var environment = {
    development: nodeModule.util.env.dev,
    production: nodeModule.util.env.production
};


// =============================================
// VENDOR `gulp vendor`
// moves files from vendor to build directory
// =============================================

gulp.task( 'vendor', function() {
    return gulp.src( project.sourceDirectory + '/' + project.vendorDirectory + '/**/*' )
        .pipe( nodeModule.changed( project.distDirectory + '/' + project.vendorDirectory ) )
        .pipe( gulp.dest( project.distDirectory + '/' + project.vendorDirectory ) );
} );

gulp.task('vendor-scripts', function() {
    return gulp.src(project.sourceDirectory + '/' + project.vendorDirectory + '/**/*.js')
    .pipe(environment.production ? nodeModule.uglify() : nodeModule.util.noop())
    .pipe(gulp.dest(project.distDirectory + '/' + project.vendorDirectory));
});

gulp.task('vendor-styles', function() {
    return gulp.src(project.sourceDirectory + '/' + project.vendorDirectory + '/**/*.css')
    .pipe(environment.production ? nodeModule.cssNano({discardUnused: {fontFace: false}}) : nodeModule.util.noop())
    .pipe(gulp.dest(project.distDirectory + '/' + project.vendorDirectory));
});

gulp.task('vendor-images', function() {
    return gulp.src(project.sourceDirectory + '/' + project.vendorDirectory + '/**/*')
    .pipe(environment.production ? nodeModule.imageMin(option.imageOptimisation) : nodeModule.util.noop())
    .pipe(gulp.dest(project.distDirectory + '/' + project.vendorDirectory));
});


// =============================================
// SVG Sprite `gulp svg-sprite`
// Optimises and merges SVG's into sprite
// =============================================

gulp.task( 'svg-sprite', function() {
    return gulp.src( project.sourceDirectory + '/' + project.iconsDirectory + '/**/*.svg' )
        .pipe( nodeModule.svgSprite( option.svgSpriteConfig ) )
        .pipe( gulp.dest( project.distDirectory + '/' + project.iconsDirectory ) );
} );


// =============================================
// IMG `gulp img`
// minifys images
// =============================================

gulp.task( 'img', function() {
    return gulp.src( [
        project.sourceDirectory + '/' + project.imagesDirectory + '/**/*',
        '!' + project.sourceDirectory + '/' + project.iconsDirectory + '/**/*'
    ] )
        .pipe( nodeModule.changed( project.distDirectory + '/' + project.imagesDirectory ) )
        .pipe( environment.production ? nodeModule.imageMin( option.imageOptimisation ) : nodeModule.util.noop() )
        .pipe( gulp.dest( project.distDirectory + '/' + project.imagesDirectory ) );
} );


// =============================================
// JS `gulp js`
// compiles js, Jshint, Minify if `--production`
// =============================================

gulp.task( 'js', function() {
    return gulp.src( project.sourceDirectory + '/' + project.scriptsDirectory + '/**/*.js' )
        .pipe( nodeModule.jsHint() )
        .pipe( nodeModule.jsHint.reporter( 'default' ) )
        .pipe( environment.production ? nodeModule.uglify() : nodeModule.util.noop() )
        .pipe( gulp.dest( project.distDirectory + '/' + project.scriptsDirectory ) );
} );


// =============================================
// CSS `gulp css`
// compiles scss to css, autoprefixer, combines media queries and minifies if `--production`
// =============================================

gulp.task( 'scss', function() {
    return gulp.src( project.sourceDirectory + '/' + project.stylesDirectory + '/**/*.scss' )
        .pipe( nodeModule.clipEmptyFiles() )
        .pipe( environment.development ? nodeModule.sourcemaps.init() : nodeModule.util.noop() )
        .pipe( ! environment.production ? nodeModule.sass.sync().on( 'error', nodeModule.sass.logError ) : nodeModule.util.noop() )
        .pipe( environment.production ? nodeModule.sass.sync() : nodeModule.util.noop() )
        .pipe( nodeModule.autoPrefixer( option.autoprefixer ) )
        .pipe( environment.development ? nodeModule.sourcemaps.write() : nodeModule.util.noop() )
        .pipe( environment.production ? nodeModule.combineMq() : nodeModule.util.noop() )
        .pipe( environment.production ? nodeModule.cssNano( option.cssNano ) : nodeModule.util.noop() )
        .pipe( gulp.dest( project.distDirectory + '/css' ) );
} );


// =============================================
// Clean `gulp clean
// destroys the build directory
// =============================================

gulp.task( 'clean', function( cb ) {
    return nodeModule.del( [ project.distDirectory ], cb );
} );


// =============================================
// Build 'gulp build'
// builds all assets, also has `--production` option to build production ready assets
// =============================================

gulp.task( 'build', gulp.series( 'clean', gulp.parallel( 'scss', 'js' ), 'img', 'svg-sprite', 'vendor', 'vendor-images', 'vendor-styles', 'vendor-scripts' ) );


// =============================================
// Watch 'gulp watch'
// watches files and runs on change
// =============================================

gulp.task( 'watch', function() {
    gulp.watch( project.sourceDirectory + '/' + project.stylesDirectory + '/**/*.scss', gulp.series( 'scss' ) );
    gulp.watch( project.sourceDirectory + '/' + project.scriptsDirectory + '/**/*.js', gulp.series( 'js' ) );
    gulp.watch( project.sourceDirectory + '/' + project.imagesDirectory + '/**/*', gulp.series( 'img' ) );
    gulp.watch( project.sourceDirectory + '/' + project.iconsDirectory + '/**/*', gulp.series( 'svg-sprite' ) );
    gulp.watch( project.sourceDirectory + '/' + project.vendorDirectory + '/**/*', gulp.series( 'vendor' ) );
} );


// =============================================
// Default 'gulp'
// runs build task, Runs watch tasks
// =============================================

gulp.task( 'default', gulp.series( 'build', 'watch' ) );
