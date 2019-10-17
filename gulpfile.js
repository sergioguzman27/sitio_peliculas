var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var connect = require('gulp-connect-php');


// Local server
gulp.task('php', function(){
    return gulp.src([
        'index.php',
        'sections/*.php'
    ])
    .pipe(gulp.dest('src/'))
    .pipe(browserSync.stream());
});
gulp.task('php-serve', function(){
    connect.server({base:'./src', port:8080, keepalive:true});
});

gulp.task('serve', ['php-serve'], function() {
    browserSync.init({
        proxy: '127.0.0.1:8080',
        baseDir: "./src",
        open:true,
        notify:false
    });
});

gulp.watch(['sections/*.php']), ['php'];
gulp.watch(['index.php']), ['php'];
gulp.watch('./src/pages/*.php').on('change', browserSync.reload);
gulp.watch('./src/index.php').on('change', browserSync.reload);

// Start server on default task

gulp.task('default',['php', 'serve']);