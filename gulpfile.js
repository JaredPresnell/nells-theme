var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var uglify = require('gulp-uglify');

var styleSRC = 'scss/style.scss';
var styleSRC2 = 'scss/nells.admin.scss';
var styleDIST = './css/';
var styleWatch = 'scss/**/*.scss';

// var jsSRC = 'myscript.js';
// var jsfolder = 'src/js/';
// var jsDIST = './assets/js/';
// var jsWatch = 'src/js/**/*.js'
// var jsFILES = [jsSRC];

gulp.task('style', function(){
	gulp.src( styleSRC )
		.pipe( sourcemaps.init() )
		.pipe( sass({
			errorLogToConsole: true,
			outputStyle: 'compressed' 	
		}) )
		.on( 'error', console.error.bind( console) )
		.pipe( autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}) )
		.pipe( rename( { suffix: '.min' } ) )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( styleDIST ) );

});
gulp.task('style2', function(){
	gulp.src( styleSRC2 )
		.pipe( sourcemaps.init() )
		.pipe( sass({
			errorLogToConsole: true,
			outputStyle: 'compressed' 	
		}) )
		.on( 'error', console.error.bind( console) )
		.pipe( autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}) )
		.pipe( rename( { suffix: '.min' } ) )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( styleDIST ) );

});
// gulp.task('js', function(){
// 	jsFILES.map(function(entry){
// 		return browserify({
// 			entries: [jsfolder + entry]
// 		})
// 		.transform( babelify, {presets: ['env']} )
// 		.bundle()
// 		.pipe( source( entry ) )
// 		.pipe( rename({extname:'.min.js'}) )
// 		.pipe( buffer() )
// 		.pipe( sourcemaps.init({loadMaps: true}) )
// 		.pipe( uglify() )
// 		.pipe( sourcemaps.write( './' ) )
// 		.pipe( gulp.dest( jsDIST ) )
// 	});

// });

gulp.task('default', [
		'style',
		'style2'
		// 'js'
	]);

gulp.task('watch', ['default'], function(){
	gulp.watch( styleWatch, ['style'] );
	gulp.watch( styleWatch, ['style2'] );//this is fucked i think
	//gulp.watch( jsWatch, ['js'] );
});