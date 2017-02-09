var gulp = require('gulp');
var sass = require('gulp-sass');
var csso = require('gulp-csso');
var autoprefixer = require('gulp-autoprefixer');
var stripDebug = require('gulp-strip-debug');
var uglify = require('gulp-uglify');
var flatten = require('gulp-flatten');
var importer = require('gulp-fontello-import');
var mainBowerFiles = require('gulp-main-bower-files');
var fontmin = require('gulp-fontmin');

gulp.task('development', function() {
	gulp.src('./sass/about.sass')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(gulp.dest('./css'));
});
gulp.task('production', function() {
	gulp.src('./sass/about.sass')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(csso())
		.pipe(gulp.dest('./css'));
});
gulp.task('watch', function() {
	gulp.watch('./sass/about.sass', ['development']);
});
gulp.task('js-min', function(){
	gulp.src('./js-dev/*.js')
		.pipe(stripDebug())
		.pipe(uglify())
		.pipe(gulp.dest('./js/'));
});
gulp.task('fontello', function(cb) {
    importer.getFont({
        host           	: 'http://fontello.com',
        config         	: 'fontello.json',
        css 			: 'css',
        font 			: 'font'
    },cb);
});
gulp.task('bower', function() {
    var bower = gulp.src('./bower.json')
        .pipe(mainBowerFiles())
        .pipe(flatten())
        .pipe(gulp.dest('./bower_simple'));
    bower.on('end', function(){
		gulp.run('bower:css', 'bower:js', 'bower:swf');
    });
    return
});
gulp.task('fontgen', function () {
    return gulp.src('./fonts/Champagne_Limousines.ttf')
        .pipe(fontmin())
        .pipe(gulp.dest('./fonts'));
});
gulp.task('bower:css', function() {
	return gulp.src('./bower_simple/**/*.css').pipe(flatten()).pipe(gulp.dest('./css'))
});
gulp.task('bower:js', function() {
	return gulp.src('./bower_simple/**/*.js').pipe(flatten()).pipe(gulp.dest('./js'))
});
gulp.task('bower:swf', function() {
	return gulp.src('./bower_simple/**/*.swf').pipe(flatten()).pipe(gulp.dest('./js'))
});