var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// LOCAL SERVER + WATCHDOG

gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: "./"
    });

    gulp.watch("./scss/*.scss", ['sass']);
    gulp.watch("./*.html").on('change', browserSync.reload);
});

// SASS COMPILER TRIGGER + BROWSER RELOAD


gulp.task('sass', function() {
    return gulp.src("./scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("./css"))
        .pipe(browserSync.stream());
});

function checkMe() {
	console.log("Working hard");
}

gulp.task('default', ['serve'], checkMe());