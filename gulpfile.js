var gulp = require('gulp');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync');
var connect = require('gulp-connect-php');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var minifyCss = require('gulp-minify-css');


// gulp-uglify
gulp.task('compress', function() {
	return gulp.src('js/*.js')
		.pipe(uglify())
		.pipe(gulp.dest('min'));
});

// Styles
gulp.task('styles', function () {
	return gulp.src('scss/main.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(minifyCss({compatibility: 'ie8'}))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('css/'));
});

// Watches JS
gulp.task('watch', function() {
	//gulp.watch('js/*.js', ['compress']);
	//gulp.watch('scss/**/*.scss', ['styles']);
	gulp.watch('index.php', [browserSync.reload]);
	gulp.watch('scss/**/*.scss', [browserSync.reload]);
	gulp.watch('scss/main.scss', [browserSync.reload]);
	gulp.watch('js/*.js', [browserSync.reload]);
	gulp.watch('js/**/*', [browserSync.reload]);
	gulp.watch('pages/**/*.html', [browserSync.reload]);
	gulp.watch('pages/*.html', [browserSync.reload]);
	gulp.watch('pages/*.html', [browserSync.reload]);
	gulp.watch('pages/**/*.php', [browserSync.reload]);
	gulp.watch('pages/*.php', [browserSync.reload]);
	gulp.watch('pages/*.php', [browserSync.reload]);
	gulp.watch('img/*', [browserSync.reload]);
});


gulp.task('browser-sync', function () {
	connect.server({
		base: './'
	}, function () {
		browserSync({
			notify: false,
			open: false,
			proxy: "localhost:8000"
		})
	});
});


gulp.task('default', ['compress', 'styles', 'watch', 'browser-sync']);



