var gulp = require('gulp'),
	gutil = require('gulp-util'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	livereload = require('gulp-livereload'),
	clean = require('gulp-clean'),
	imagemin = require('gulp-imagemin'),
	minify_css = require('gulp-minify-css'),
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

var filesToMove = [
	'./*.php',
	'./*.png',
	'./*.ico',
	'./fonts/*'
];

gulp.task('clean-out', function() {
	return gulp.src('outbound')
			.pipe(clean());
});

gulp.task('js', function() {
	gulp.src(jsSources)
			.pipe(concat('scripts.js'))
			.pipe(gulp.dest('js'));
});

gulp.task('js-out', ['clean-out'], function() {
	gulp.src(jsSources)
			.pipe(uglify())
			.pipe(concat('scripts.js'))
			.pipe(gulp.dest('outbound/js'));
});

gulp.task('sass', function() {
	gulp.src(sassSources)
			.pipe(sass({style: 'expanded', lineNumbers: true}))
			.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
			.pipe(concat('style.css'))
			.pipe(gulp.dest(''))
			.pipe(livereload());
});

gulp.task('sass-out', ['clean-out'], function() {
	gulp.src(sassSources)
			.pipe(sass({ style: 'compressed' }))
			.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
			.pipe(concat('style.css'))
			.pipe(minify_css())
			.pipe(gulp.dest('outbound'));
});

gulp.task('image-out', ['clean-out'], function() {
	gulp.src('gfx/*')
			.pipe(imagemin())
			.pipe(gulp.dest('outbound/gfx'));
});

gulp.task('move', ['clean-out'], function() {
	gulp.src(filesToMove, { base: './' })
			.pipe(gulp.dest('outbound'));
});

gulp.task('watch', function() {
	var server = livereload();
	gulp.watch(jsSources, ['js']);
	gulp.watch(sassSources, ['sass']);
	gulp.watch(['js/script.js' , '*.php'], function(e) {
		server.changed(e.path);
	})
});

gulp.task('default', ['js', 'sass', 'watch']);

gulp.task('outbound', ['clean-out', 'js-out', 'sass-out', 'image-out', 'move']);

