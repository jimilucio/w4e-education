var gulp = require('gulp');
var debug = require('gulp-debug');
var sass = require('gulp-sass');

//Sass task
gulp.task('sass', function() {
  console.log('Run styles task, compiling sass files:');
  gulp.src('./library/scss/*.scss')
      .pipe(debug())
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./library/css/'));
});

//Watch task
gulp.task('watch',function() {
  gulp.watch('./library/scss/**/*.scss',['sass']);
});

gulp.task('default', ['sass','watch']);

