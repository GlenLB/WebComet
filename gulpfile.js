var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');


gulp.task('sass', function () {
    return gulp.src('public/scss/styles.scss').pipe(sass()).pipe(gulp.dest('public/css/'));
});

gulp.task('watch', () => {
    gulp.watch('scss/*.scss', ['sass']);
})