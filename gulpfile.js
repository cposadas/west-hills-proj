'use strict';

let gulp = require('gulp');
let babelify = require('babelify');
let browserify = require('browserify');
let browserSync = require('browser-sync');
let autoprefixer = require('gulp-autoprefixer');
let minifycss = require('gulp-uglifycss');
let uglify = require('gulp-uglify');
let imagemin = require('gulp-imagemin');
let rename = require('gulp-rename');
let concat = require('gulp-concat');
let notify = require('gulp-notify');
let sass = require('gulp-sass');
let plumber = require('gulp-plumber');
let sourcemaps = require('gulp-sourcemaps');
let vinylSourceStream = require('vinyl-source-stream');
let svgmin = require('gulp-svgmin');
let flatten = require('gulp-flatten');
let sassGlob = require('gulp-sass-glob');
let iconFont = require('gulp-iconfont');
let consolidate = require('gulp-consolidate');
let runSequence = require('run-sequence');
let jsonSass = require('gulp-json-sass');
let twig = require('gulp-twig');
let util = require('gulp-util');
let fs = require('fs');
let del = require('del');
var run = require('gulp-run');

/*****************************/
/*********** CONFIG **********/
/*****************************/

let dirRoot = './build/';
let siteRoot = './web/'
let buildDir = dirRoot+'build_assets/';
let cssDir = siteRoot + 'assets/css/';
let jsDir = siteRoot + 'assets/js/';
let imageDir = siteRoot + 'assets/images/';
let svgDir = siteRoot + 'assets/svg/';
let fontDir = siteRoot + 'assets/fonts/';
let dataDir = buildDir + 'data/';
let prefix = 'whcc';
let urlPath = '../../'


/*****************************/
/************ CSS ************/
/*****************************/


// compiles css from sass

gulp.task('css-compile', () => {
  return gulp.src(buildDir+'sass/*.sass')
    .pipe(plumber())
    .pipe(sassGlob())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(plumber.stop())
    .pipe(gulp.dest(cssDir+'src'));
});


gulp.task('css-config', ()=> {
  gulp.src(dataDir+'site-vars.json')
    .pipe(jsonSass({
      sass: true
    }))
    .pipe(gulp.dest(buildDir+'sass/global'))
});


//removes old css before new css is moved to make sure the directory is clean

gulp.task('css-clean', () => {
  return del([cssDir+'src', cssDir+'dist/*']);
});

//minifies css

gulp.task('css-minify', () => {
  return gulp.src(cssDir+'src/*.css')
    .pipe(plumber())
    .pipe(minifycss())
    .pipe(rename( (path) => {
      path.extname = ".min.css"
    } ))
    .pipe(plumber.stop())
    .pipe(gulp.dest(cssDir+'dist'))
});


// calls all the css building taks in the correct order

gulp.task('css-build', () => {
  console.log('\n', "\x1b[31m", "  Building CSS Files", '\n');
  return runSequence('css-clean', 'css-compile', 'css-minify', () => {return true;});

});

/*****************************/
/************* JS ************/
/*****************************/


// compiles js and adds es6 support

gulp.task('js-compile', () => {
  return browserify(buildDir+'js/app.js')
    .transform( "babelify", {presets: ["es2015"]} )
    .bundle()
    .on( 'error', function ( err ) {
      notify().write( err );
      this.emit("end")
    })
    .pipe(vinylSourceStream( 'app.js' ))
    .pipe( gulp.dest(jsDir+'src'))
});

// clear compiled and minified js files
gulp.task('js-clean', () => {
  return del([jsDir+'src/*', jsDir+'dist/*']);
});


//minified compiled js

gulp.task('js-minify', () => {
  return gulp.src(jsDir+'src/*.js')
    .pipe(plumber())
    .pipe(uglify())
    .pipe(rename( (path) => {
      path.extname = ".min.js"
    } ))
    .pipe(plumber.stop())
    .pipe(gulp.dest(jsDir+'dist'))
});


//runs js build tasks in order

gulp.task('js-build', () => {
  console.log('\n', "\x1b[32m", "  Compiling Javascript Files", '\n');
  return runSequence('js-clean', 'js-compile', 'js-minify', () => {return true;} );
});

/*****************************/
/*********** IMAGES **********/
/*****************************/

//placeholder for if we want to create images on the fly
// gulp.task('image-compile', () => {

// });

// clear compiled and minified image files
gulp.task('image-clean', () => {
  return del([imageDir]);
});


//minified images

gulp.task('image-minify', () => {
  return gulp.src(buildDir+'images/*')
    .pipe(plumber())
    .pipe(imagemin())
    .pipe(plumber.stop())
    .pipe(gulp.dest(imageDir))
});


//runs image build tasks in order

gulp.task('image-build', () => {
  console.log('\n', "\x1b[33m", "  Compiling Image Files", '\n');
  return runSequence('image-clean', 'image-minify', () => {return true;} );
});

/*****************************/
/************* SVG ***********/
/*****************************/


// clear compiled and minified svg files
gulp.task('svg-clean', () => {
  return del([svgDir]);
});


//minified images

gulp.task('svg-minify', () => {
  return gulp.src(buildDir+'svg/*')
    .pipe(plumber())
    .pipe(imagemin())
    .pipe(plumber.stop())
    .pipe(gulp.dest(svgDir))
});


//runs svg build tasks in order

gulp.task('svg-build', () => {
  console.log('\n', "\x1b[34m", "  Compiling SVG Files", '\n');
  return runSequence('svg-clean', 'svg-minify', () => {return true;} );
});

/*****************************/
/*********** FONTS ***********/
/*****************************/

//compile icon font using all of our svgs so make sure to run svg-build first

gulp.task('font-compile', () => {
  return gulp.src(svgDir+'*.svg')
  .pipe(iconFont({
    fontName: prefix+'_icons',
    normalize: true,
    formats: ['woff', 'woff2'],
  }))
  .on( 'glyphs', function ( glyphs, options ) {
    gulp.src( buildDir+'fonts/iconFontTemplate.tmpl' )
      .pipe( consolidate( 'lodash', {
        glyphs: glyphs.map( function ( glyph ) {
          return { name: glyph.name, codepoint: glyph.unicode[ 0 ].charCodeAt( 0 ) };
        }),
        fontName: prefix+'_icons',
        fontPath: urlPath+'fonts/'
      }))
      .pipe( rename( '_icons.scss' ))
      .pipe( gulp.dest( buildDir+'sass/global/fonts' ));
  })
  .pipe( gulp.dest( fontDir ));
});

//builds fonts make sure to run svg-build prior to running
gulp.task('font-build', () => {
  console.log('\n', "\x1b[33m", "  Building Fonts", '\n');
  return runSequence('font-compile', () => {return true;} );
});

gulp.task('browserSync', () => {

});

/*****************************/
/********** PATTERNS *********/
/*****************************/

// The project initially used pattern lab, but I beleive it's not used any further.
// @TODO This may be an are to clean up.
gulp.task('pattern-build', () => {
    // setTimeout(()=>{
    //   console.log('\n', "\x1b[34m", "  Building Patterns", '\n');
    //   return run('php build/patternlab/core/console --generate').exec()
    // },2000);

});

/*****************************/
/************ GULP ***********/
/*****************************/

gulp.task('watch', () => {
  console.log('\n', "\x1b[35m", "  Start watch task", '\n');
  gulp.watch('./build/build_assets/sass/**/*.sass', ()=> { runSequence('css-build', 'pattern-build' )}); // Build SASS files.
  gulp.watch('./build/build_assets/sass/**/*.scss', ()=> { runSequence('css-build', 'pattern-build' )}); // Build SCSS files.
  gulp.watch('./build/build_assets/js/**/*.js', ()=> { runSequence('js-build', 'pattern-build' )}); // Build JavaScript files.
});

gulp.task('default', ['watch'], () => {
  console.log('\n',"\x1b[34m", "  Starting build process",'\n');

});
