module.exports = function(grunt) {

    // Load NPM Tasks
    require('jit-grunt')(grunt);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        project: {
            devDir: '.',
            buildDir: '.',
            development: '<%= project.devDir %>',
            production: '<%= project.buildDir %>'
        },

        meta: {
            banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
            '<%= grunt.template.today("yyyy-mm-dd") %>' + ' <%= pkg.homepage %> ' +
            'Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author %>;' +
            ' Licensed <%= pkg.licenses %> */\n'
        },

        // Update NPM Packages
        devUpdate: {
            main: {
                options: {
                    reportUpdated: false, // Report updated dependencies? 'false' | 'true'
                    updateType   : "force" // 'force'|'report'|'prompt'
                }
            }
        },

        // List watch tasks: 'grunt -v'
        watch: {
            html: {
                files: [
                    '**/*.html',
                    '**/*.php',
                    'img/**/*.{png,jpg,jpeg,gif,webp,svg}'
                ]
            },

            sass: {
                files: ['css/src/**/*.scss'],
                tasks: ['compass:dist']
            },

            css: {
                files: ['css/**/*.css']
            },

            js: {
                files: ['js/**/*.js']
            },

            livereload: {
                files: [
                    '**/*.html',
                    '**/*.php',
                    'css/**/*.css',
                    'js/**/*.js',
                    'img/**/*.{png,jpg,jpeg,gif,webp,svg}'
                ],

                options: { livereload: true }
            }
        },

        compass: {
            dist: {
                options: {
                    config: 'config.rb',
                    sourcemap: true
                }
            }
        },

        connect: {
            server: {
                options: {
                    port: 9001,
                    protocol: 'http',
                    hostname: 'localhost',
                    base: '.',  // '.' operates from the root of your Gruntfile, otherwise -> 'Users/user-name/www-directory/website-directory'
                    keepalive: false, // set to false to work side by side w/watch task.
                    livereload: true,
                    open: true
                }
            }
        },

        // http://integralist.co.uk/Grunt-Boilerplate.html
        imagemin: {
            png: {
                options: {
                    optimizationLevel: 7,
                    cache: false // https://github.com/gruntjs/grunt-contrib-imagemin/issues/140
                },

                files: [
                    {
                        expand: true,
                        cwd: 'img/src/',
                        src: ['**/*.png'],
                        dest: 'img/dist/',
                        ext: '.png'
                    }
                ]
            },

            jpg: {
                options: {
                    progressive: true,
                    cache: false // https://github.com/gruntjs/grunt-contrib-imagemin/issues/140
                },

                files: [
                    {
                        expand: true,
                        cwd: 'img/src/',
                        src: ['**/*.jpg'],
                        dest: 'img/dist/',
                        ext: '.jpg'
                    }
                ]
            }
        },

        grunticon: {
            icons: {
                files: [{
                    expand: true,
                    cwd: 'img/svg/icons',
                    src: ['*.svg', '*.png'],
                    dest: 'img/svg/icon-fallbacks/png/'
                }],
                options: {
                    datasvgcss : 'icons.data.svg.css' // name of the generated CSS file containing PNG data uris
                }
            }
        },

        svgstore: {
            options: {
                prefix : 'icon-',
                includedemo: true,
                svg: {
                    viewBox : '0 0 100 100'
                }
            },
            default: {
                files: {
                    'img/svg/sprite.svg' : ['img/svg/icons/*.svg']
                }
            }
        },

        qunit: {
            all: ['**/*.html', '**/*.php']
        },

        jshint: {
            files: ['js/**/*.js'],

            options: {
                curly: true,
                eqeqeq: true,
                eqnull: true,
                browser: true,
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            },

            uses_defaults: ['js/**/*.js']
        },

        concat: {
            options: {
                stripBanners: false,
                banner: '<%= meta.banner %>',
                separator: ';'
            },

            // Allows for multiple files
            basic_and_extras: {
                files: {
                    // Destiniation 'string' : Source [array]
                    'js/minified/scripts.min.js' : [
                        'js/prism.js',
                        'js/plugins.js',
                        'js/script.js'
                    ]
                }
            }
        },

        uglify: {
            options: {
                banner: '<%= meta.banner %>'
            },

            my_target: {
                files: {
                    'js/minified/scripts.min.js' : ['js/minified/scripts.min.js'] // Destiniation 'string' : Source [array]
                }
            }
        },

        clean: ['dist'],

        copy: {
            html: {
                files: [
                    {
                        // Destiniation 'string' : Source [array]
                        '<%= project.buildDir %>/footer.php': ['footer.php']
                    }
                ]
            }
        },

        replace: {
            build_replace: {
                options: {
                    variables: {
                        // Development Hash Value
                        // @example: css/styles.@@hash.css
                        // 'hash': '0000000000', // Development
                        // Generate a truly random number by concatenating the current date with a random number
                        // The variable name corresponds with the same in our HTML file.
                        'hash': '<%= ((new Date()).valueOf().toString()) + (Math.floor((Math.random()*1000000)+1).toString()) %>' // Production
                    }
                },

                files: [
                    {
                        // Destiniation 'string' : Source [array]
                        '<%= project.buildDir %>/footer.php': ['<%= project.buildDir %>/footer.php']
                    }
                ]
            }
        },

        htmlmin: {
            dist: {
                options: {
                    removeComments: false,
                    collapseWhitespace: false
                },

                files: {
                    '<%= project.buildDir %>/index.html': ['<%= project.buildDir %>/index.html'] // Destiniation 'string' : Source [array]
                }
            }
        },

        useminPrepare: {
            files: {
                '<%= project.buildDir %>/index.html': ['<%= project.buildDir %>/index.html'] // Destiniation 'string' : Source [array]
            }
        },

        usemin: {
            html: ['<%= project.buildDir %>/index.html', '<%= project.buildDir %>/index.html'],
            options: {
                assetsDirs: ['js']
            }
        },

        // Gives your assets a version flag ?v=1385933480172
        asset_cachebuster: {
            options: {
                buster: Date.now(),
                ignore: [
                    // Ignore cache busting CDN URIs
                    'js/vendor/modernizr-2.8.1.min.js',
                    '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
                    'js/vendor/jquery-1.11.0.min.js',
                ]
            },

            build: {
                files: [
                    {
                        src: ['index.html'],
                        dest: '<%= project.buildDir %>/index.html'
                    }
                ]
            }
        },

        rev: {
            options: {
                encoding: 'utf8',
                algorithm: 'md5',
                length: 8
            },

            assets: {
                files: [
                    {
                        src: [
                            'css/main.css',
                            'js/plugins.js',
                            'js/script.js'
                        ]
                    }
                ]
            }
        }
    });


    // Development
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('hint', ['jshint']);
    grunt.registerTask('test', ['qunit']);

    // Build
    grunt.registerTask('svgicon', ['grunticon:icons']);
    grunt.registerTask('svgsprite', ['svgstore:default']);
    grunt.registerTask('imgmin', ['imagemin']);
    grunt.registerTask('build', [
        'copy',
        'concat',
        'uglify',
        'useminPrepare',
        'usemin',
        'replace'
    ]);
    grunt.registerTask('cachebust', ['asset_cachebuster']);
    grunt.registerTask('filerev', ['rev']);

    // Maintenance
    grunt.registerTask('update', ['devUpdate']);
};