var autoprefixer = require( 'autoprefixer' );
var del = require( 'del' );
var fs = require( 'fs' );
var gulp = require( 'gulp' );
var plumber = require( 'gulp-plumber' );
var postcss = require( 'gulp-postcss' );
var sass = require( 'gulp-sass' );
var shell = require( 'gulp-shell' );
var wpPot = require( 'gulp-wp-pot' );
var zip = require( 'gulp-zip' );

var pkg = JSON.parse( fs.readFileSync( 'package.json' ) );

// ------------------------------------------------------------

gulp.task( 'css', function() {
	return gulp.src( 'assets/scss/style.scss' )
		.pipe( plumber() )
		.pipe( sass.sync() )
		.pipe( postcss( [ autoprefixer() ] ) )
		.pipe( gulp.dest( '.' ) );
} );

gulp.task( 'watch', function() {
	gulp.watch( 'assets/scss/**/*', [ 'css' ] );
} );

gulp.task( 'default', [ 'watch' ] );

// ------------------------------------------------------------

gulp.task( 'translate', function() {
	return gulp.src( '**/*.php' )
		.pipe( wpPot( {
			domain: pkg.name,
			package: 'Phresh',
		} ) )
		.pipe( gulp.dest( 'languages/' + pkg.name + '.pot' ) );
} )

gulp.task( 'copy', [ 'translate' ], function( cb ) {
	return gulp.src( [
		'**',
		'!node_modules/',
		'!node_modules/**',
		'!gulpfile.js',
		'!package.json',
		'!dotorg-assets/',
		'!dotorg-assets/**'
	] )
	.pipe( gulp.dest( 'temp/' + pkg.name + '/' ) );
} );

gulp.task( 'zip', [ 'copy' ], function() {
	return gulp.src( 'temp/' + pkg.name + '/**/*' )
		.pipe( zip( pkg.name + '-' + pkg.version + '.zip' ) )
		.pipe( gulp.dest( 'temp/' ) );
} );

gulp.task( 'export', [ 'zip' ], shell.task( 'mv temp/' + pkg.name + '-' + pkg.version + '.zip ~/Desktop/' ) );

gulp.task( 'clean', [ 'export' ], function() {
	return del( 'temp/' );
} );

// ------------------------------------------------------------

gulp.task( 'release', [ 'translate', 'copy', 'zip', 'export', 'clean' ] );
