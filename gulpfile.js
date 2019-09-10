// Include Gulp
'use strict';
const gulp = require('gulp');

// Include Plugins
const sass         = require('gulp-sass');
const plumber      = require('gulp-plumber');
const gulpUtil     = require('gulp-util');
const rename       = require('gulp-rename');
const sourcemaps   = require('gulp-sourcemaps');
const postcss      = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const pixrem       = require('pixrem');
const cssnano      = require('cssnano');
const browserSync  = require('browser-sync').create();


// Include Plugins
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

// make noise on js and scss errors
function errorHandler() {
    gulpUtil.beep();
    return true;
}

// Compile Main-Sass and create CSS-File
gulp.task('sass', function () {
    return gulp
        .src('src/scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber(errorHandler))
        .pipe(sass({
            outputStyle: 'expanded',
            errLogToConsole: true
        }).on('error', sass.logError))
        .pipe(plumber.stop())
        .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest(''))
        .pipe(browserSync.stream());
});

// Minify & Autoprefix CSS
gulp.task('css', function () {
    var processors = [
        pixrem(),
        autoprefixer({
            browsers: ['last 4 versions', 'android 4', 'opera 12']
        }),
        cssnano()
    ];
    return gulp
        .src('style.css')
        .pipe(postcss(processors))
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest(''));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp
       .src('src/js/**.js')
       .pipe(
          babel({
             presets: ['@babel/env'],
          })
       )
       .pipe(concat('main.js'))
       .pipe(gulp.dest('assets/js'))
       .pipe(
          rename({
             suffix: '.min',
          })
       )
       .pipe(plumber())
       .pipe(uglify())
       .pipe(plumber.stop())
       .pipe(gulp.dest('assets/js'));
 });
 // Copy & Minify Vendor JS
 gulp.task('scripts-vendor', function() {
    return gulp
       .src('src/js/vendor/**.js')
       .pipe(concat('vendor.js'))
       .pipe(gulp.dest('assets/js/vendor'))
       .pipe(
          rename({
             suffix: '.min',
          })
       )
       .pipe(plumber())
       .pipe(uglify())
       .pipe(plumber.stop())
       .pipe(gulp.dest('assets/js/vendor'));
 });

// Watch Files For Changes
gulp.task('watch', function () {
    browserSync.init({
        proxy: 'http://localhost/japanBlog/'
    });
    gulp.watch('src/scss/**/*.scss', ['sass']);
    gulp.watch('**/*.php').on('change', browserSync.reload);
    gulp
        .watch(
        'src/js/**/*.js',
        [
            'scripts',
            'scripts-vendor'
        ]
        )
        .on('change', browserSync.reload);
});

// Default Tasks
gulp.task('default', ['sass', 'scripts', 'scripts-vendor', 'watch']);

// Build
gulp.task('build', ['sass', 'css', 'scripts', 'scripts-vendor']);