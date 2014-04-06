var gulp = require('gulp'),
	gutil = require('gulp-util'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	sass = require('gulp-sass'),
	livereload = require('gulp-livereload'),
	lr = require('tiny-lr'),
	server = lr();

var jsSources = [
	'js/vendor/*.js',
	'js/up_scripts.js'
];

var sassSources = [
	'sass/*.scss'
];

gulp.task('js', function() {
	gulp.src(jsSources)
			.pipe(uglify())
			.pipe(concat('script.js'))
			.pipe(gulp.dest('js'));
});

gulp.task('sass', function() {
	gulp.src(sassSources)
			.pipe(sass({style: 'expanded', lineNumbers: true}))
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