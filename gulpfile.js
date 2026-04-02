const { src, dest, watch, series, parallel } = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const purgecss = require('gulp-purgecss')
const babel = require('gulp-babel')
const concat = require('gulp-concat')

// SCSS TASK
function buildWtfWtfStyles() {
    return src('./_scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./wtf-theme-assets/css/'))
}

// Define your bundles here
const jsBundles = {
    'wtf': ['./_js/wtf/*.js'],
    'client': ['./_js/client/*.js']
};

// JS TASK
function buildWtfWtfScripts(done) {
    const tasks = Object.keys(jsBundles).map(bundleName => {
        return src(jsBundles[bundleName])
            .pipe(babel({
                presets: ['@babel/preset-env']
            }))
            .pipe(concat(`${bundleName}.js`))
            .pipe(dest('./wtf-theme-assets/js/'));
    });
    
    // We use a trick here: since src is async, we usually return a merged stream
    // but for simplicity, you can just run them as separate named tasks.
    done();

}

/*
function buildWtfWtfScripts() {*/
    //return src('./_js/**/*.js')
    /*
        .pipe(babel({
            presets: ['@babel/preset-env']
        }))
        .pipe(concat('main.js'))
        .pipe(dest('./js/'))
}*/

// WATCH TASK
function watchTask() {
    watch('./_scss/**/*.scss', buildWtfWtfStyles)
    watch('./_js/**/*.js', buildWtfWtfScripts)
}

exports.default = series(
    parallel(buildWtfWtfStyles, buildWtfWtfScripts),
    watchTask
)