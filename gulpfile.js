
/**
 * Require dependencies.
 */

var gulp = require('gulp')
    , svgSprite    = require('gulp-svg-sprite')
    , plumber      = require('gulp-plumber');


/**
 * Build icons maps
 */

gulp.task('icons', function () {
    var fs = require('fs');
    var glob = require("glob");
    var ico = [];
    var paths = ['icons', 'icons/lessons'];

    // Clear old files

    paths.forEach(function(entry) {
        if (fs.existsSync(entry + '/icons.yml'))
            fs.unlinkSync(entry + '/icons.yml');
    });


    // Find icons and generate map

    paths.forEach(function(val) {

        glob(val + "/*.png", {nomount: true}, function (er, files) {

            ico = [];

            files.forEach(function(entry) {
                ico.push(entry.substring(entry.lastIndexOf('/') + 1, entry.indexOf('.')));
            });

            fs.writeFile(val + "/icons.yml", 'icons: ' + ico, function(err) {

                if(err) throw err;

            });

        });


    });


});

/**
 * Build svgSprite.
 */


gulp.task('svgsprite', function() {
    var baseDir      = 'icons/',   // <-- Set to your SVG base directory
        svgGlob      = '*.svg',       // <-- Glob to match your SVG files
        outDir       = 'svg',     // <-- Main output directory
        config       = {
            shape               : {
                dimension       : {         // Set maximum dimensions
                    maxWidth    : 32,
                    maxHeight   : 32
                },
                dest            : 'svg/'    // Keep the intermediate files
            },
            svg                     : {                         // General options for created SVG files
                xmlDeclaration      : false
            },
            mode                : {
                symbol          : true      // Activate the «symbol» mode
            }
        };

    return gulp.src(svgGlob, {cwd: baseDir})
        .pipe(plumber())
        .pipe(svgSprite(config)).on('error', function(error){ console.log(error); })
        .pipe(gulp.dest(outDir))
});


/**
 * Build distribution.
 */

gulp.task('dist', ['svgsprite'], function() {});

/**
 * The default task (called when you run `gulp` from cli)
 */

gulp.task('default', ['dist']);
