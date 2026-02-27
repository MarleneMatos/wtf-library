const { src, dest, watch, series } = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const purgecss = require('gulp-purgecss')

function buildWtfWtfStyles() {
    return src('./scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        /*
        .pipe(purgecss({
            content: ['./_wp-webtechfocus/wp-content/themes/wtf-webtechfocus/*.php', './wtf-php/*.php', './*.php' ]
        }))*/
        .pipe(dest('./_css/'))
}

function watchTask() {
    watch(['./scss/*.scss', './scss/**/*.scss'], buildWtfWtfStyles)
    }

exports.default = series( buildWtfWtfStyles, watchTask)

