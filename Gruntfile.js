module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            // Default options
            options: {
                livereload: true,
                spawn: false,
            },

            scripts: {
                files: ['public/js/*.js'],
                tasks: ['jshint:app']
            },

            css: {
                files: ['public/scss/**/*.scss'],
                tasks: ['compass:dev']
            }
        },

        jshint: {
            app: ['public/js/app.js']
        },

        uglify: {
            build: {
                'src': 'public/js/app.js',
                'dest': 'public/js/app.min.js'
            },
            vendor: {
                files: [
                    {
                        expand: true,
                        cwd: 'public/js/vendor',
                        src: '**/*.js',
                        dest: 'public/js/vendor',
                        ext: '.min.js'
                    }
                ]
            }
        },

        compass: {
            // Default options
            options: {
                'httpPath': 'public/',
                'sassDir': 'public/scss',
                'cssDir': 'public/css',
                'imagesDir': 'public/img',
                'javascriptsDir': 'public/js',
                'importPath': [
                    'public/bower_components/foundation/scss',
                    'public/bower_components/bourbon/app/assets/stylesheets',
                ],
            },

            dev: {
                options: {
                    'outputStyle': 'expanded',
                },
                'src': 'public/scss/app.scss',
                'dest': 'public/css/app.css/'
            },

            build: {
                options: {
                    'outputStyle': 'compressed',
                    'noLineComments': true,
                },
                'src': 'public/scss/app.scss',
                'dest': 'public/css/app.css/'
            }
        },

        modernizr: {
            'devFile': 'public/js/vendor/modernizr-latest.js',
            'outputFile': 'public/js/vendor/modernizr-custom.js',
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-modernizr');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['jshint', 'compass:dev']);
    grunt.registerTask('build', ['jshint', 'uglify', 'modernizr', 'compass:build']);
}
