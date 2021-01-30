const gulp = require('gulp'); 
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

//compile scss into css
function style() {
    return gulp.src('./app/styles/**/*.scss') 
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('./dist'))      
    .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        proxy: 'http://upwork.test',  
        port: 3000, 
        /*server: {
            baseDir:'./'  
        }*/

    }); 
    gulp.watch('./app/styles/**/*.scss', style)  
    gulp.watch('**/*.php').on('change', browserSync.reload); 
}

exports.style = style;  
exports.watch = watch; 