const { src, dest, watch, series, parallel } = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const purgecss = require('gulp-purgecss')
const babel = require('gulp-babel')
const concat = require('gulp-concat')

// SCSS TASK
function buildWtfWtfStyles() {
    return src('./_scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./css/'))
}

// JS TASK
function buildWtfWtfScripts() {
    return src('./_js/**/*.js')
        .pipe(babel({
            presets: ['@babel/preset-env']
        }))
        .pipe(concat('main.js'))
        .pipe(dest('./js/'))
}

// WATCH TASK
function watchTask() {
    watch('./_scss/**/*.scss', buildWtfWtfStyles)
    watch('./_js/**/*.js', buildWtfWtfScripts)
}

exports.default = series(
    parallel(buildWtfWtfStyles, buildWtfWtfScripts),
    watchTask
)