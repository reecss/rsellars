module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

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
                        src: 'public/js/vendor/*.js',
                        dest: 'public/js/vendor/',
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

    grunt.registerTask('default', ['jshint', 'compass:dev']);
    grunt.registerTask('build', ['jshint', 'uglify', 'modernizr', 'compass:build']);
}
