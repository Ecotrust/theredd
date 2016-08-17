module.exports = function(grunt) {
  // Do grunt-related things in here

  grunt.registerTask('watch', [ 'watch' ]);

  grunt.initConfig({
    codekit: {
      kit: {
        src: 'config.codekit',
        dest: './'
      }
    },
    // concat: {
    //   jquery_fullpage: {
    //     options: {
    //       separator: ';'
    //     },
    //     src: [
    //       'js/jquery.fullpage.js'
    //     ],
    //     dest: 'js/min/jquery.fullpage.min.js'
    //   },
    //   jquery:{
    //     options: {
    //       separator: ';'
    //     },
    //     src: [
    //       'js/jquery.js'
    //     ],
    //     dest: 'js/min/jquery.min.js'
    //   },
    //   main: {
    //     options: {
    //       separator: ';'
    //     },
    //     src: [
    //       'js/main.js'
    //     ],
    //     dest: 'js/min/main.min.js'
    //   },
    // },
    // uglify: {
    //   options: {
    //     mangle: false
    //   },
    //   js: {
    //     files: {
    //       'js/min/main.min.js': ['js/min/main.min.js'],
    //       'js/min/jquery.min.js': ['js/min/jquery.min.js'],
    //       'js/min/jquery.fullpage.min.js': ['js/min/jquery-fullpage.min.js'],
    //     }
    //   }
    // },
    // sass: {
    //   dist: {
    //     files: {
    //       "css/style.css": "scss/style.scss"
    //       // "css/style.css": [
    //       //     "scss/_*.scss",
    //       //     "scss/style.scss"
    //       // ]
    //     }
    //   }
    // },
    watch: {
    //   js: {
    //     files: ['js/*.js'],
    //     tasks: ['concat:js', 'uglify:js', 'sass:dist'],
    //     options: {
    //       livereload: true,
    //     }
    //   },
    //   css: {
    //     files: ['scss/style.scss'],
    //     tasks: ['sass'],
    //     options: {
    //       livereload: true,
    //     }
    //   }
      codekit: {
        files: ['js/*.js','scss/*.scss'],
        tasks: ['codekit:kit'],
        options: {
          livereload: true
        }
      }
    }
  });

  // grunt.loadNpmTasks('grunt-contrib-concat');
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  // grunt.loadNpmTasks('grunt-contrib-sass');
  // grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-codekit');
  // grunt.registerTask('default',['concat','uglify','sass','watch']);
  grunt.registerTask('default',['codekit']);


};
