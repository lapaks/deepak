var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer'); // auto prefixer for css
var minify = require('gulp-minify');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
 
gulp.task('autoprefixer', function(){
    return gulp.src('css/style.scss')
        .pipe(autoprefixer({ browsers: ["> 0%"] }))
        .pipe(gulp.dest('css/'));
});


// Compile Our Sass



gulp.task('sass', function () {
 return gulp.src('css/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('css'));
});



// compact css file 
gulp.task('compact', function () {
    return gulp.src('css/style.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('css'));
});


//minify
gulp.task('compress', function() {
  return gulp.src('js/*.js')
    .pipe(minify({
        ext:{
            src:'* test.js',
            min:'min.js'
        }
    }))
    .pipe(gulp.dest('js'))
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('css/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'watch']);









