var gulp = require('gulp');
var wpPot = require('gulp-wp-pot');
var sort = require('gulp-sort');
 
gulp.task('translate', function () {
    return gulp.src('src/*.php')
        .pipe(sort())
        .pipe(wpPot( {
            domain: '',
            destFile:'file.pot',
            package: 'package_name',
            bugReport: 'http://example.com',
            lastTranslator: 'John Doe <mail@example.com>',
            team: 'Team Team <mail@example.com>'
        } ))
        .pipe(gulp.dest('builds'));
});