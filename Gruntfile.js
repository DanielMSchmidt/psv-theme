'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to match all subfolders:
// 'test/spec/**/*.js'
// templateFramework: 'lodash'

module.exports = function (grunt) {
    // show elapsed time at the end
    require('time-grunt')(grunt);
    // load all grunt tasks
    require('load-grunt-tasks')(grunt);


    grunt.initConfig({
        watch: {
            options: {
                nospawn: true
            },
            coffee: {
                files: ['**/*.coffee'],
                tasks: ['coffee:dist']
            },
            compass: {
                files: ['**/*.sass'],
                tasks: ['compass:dist']
            }
        },
        coffee: {
            dist: {
                files: [{
                    // rather than compiling multiple files here you should
                    // require them into your main .coffee file
                    expand: true,
                    cwd: '',
                    src: '**/*.coffee',
                    dest: '',
                    ext: '.js'
                }]
            }
        },
        compass: {
            dist: {
                files: [{
                    // rather than compiling multiple files here you should
                    // require them into your main .coffee file
                    expand: true,
                    cwd: '',
                    src: '**/*.sass',
                    dest: '',
                    ext: '.css'
                }]
            }
        }
    });

    grunt.registerTask('default', [
        'coffee:dist',
        'compass:dist',
        'watch:coffee',
        'watch:compass'
    ]);
};
