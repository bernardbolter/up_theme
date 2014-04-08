var gulp = require('gulp'),
	gutil = require('gulp-util'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	livereload = require('gulp-livereload'),
	lr = require('tiny-lr'),
	server = lr();

var jsSources = [
	'js/vendor/*.js',
	'js/up_scripts.js'
];

var sassSources = [
	'sass/*.scss',
	'sass/bitters/*.scss'
];

gulp.task('js', function() {
	gulp.src(jsSources)
			.pipe(uglify())
			.pipe(concat('scripts.js'))
			.pipe(gulp.dest('js'));
});

gulp.task('sass', function() {
	gulp.src(sassSources)
			.pipe(sass({style: 'expanded', lineNumbers: true}))
			.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
			.pipe(concat('style.css'))
			.pipe(gulp.dest(''))
			.pipe(livereload());
})

gulp.task('watch', function() {
	var server = livereload();
	gulp.watch(jsSources, ['js']);
	gulp.watch(sassSources, ['sass']);
	gulp.watch(['js/script.js' , '*.php'], function(e) {
		server.changed(e.path);
	})
})

gulp.task('default', ['js', 'sass', 'watch']);