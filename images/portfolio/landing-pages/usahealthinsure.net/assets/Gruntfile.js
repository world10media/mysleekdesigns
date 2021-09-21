/**
 * Created by hm909 on 6/30/16.
 */


module.exports = function(grunt){

/*    grunt.registerTask("default", "", function () {
        grunt.log.write("asdasdasdasd");
    });*/

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        /*cssmin: {
            combine: {
                files: {
                    'css/uhi-index.css': [
                        'css/plugins/bootstrap.min.css',
                        'css/responsive.css',
                        'css/style.css',
                        'css/custom.css',
                        'css/fonts-lato.css'
                    ]
                }
            }
        },*/



        cssmin: {
            combine: {
                files: {
                    'css/uhi-form.css': [
                        'css/plugins/bootstrap.min.css',
                        'css/icons/iconfont.css',
                        'css/custom-form.css',
                        'css/styles-form-v2.css',
                        'css/responsive.css'
                    ]
                }
            }
        },





        uglify: {
            dist: {
                files: {
                    'js/ahi.min.js': [
                        'js/plugins/jquery1.11.2.min.js',
                        'js/plugins/bootstrap.min.js',
                        'js/plugins/jquery.easing.1.3.min.js',
                        'js/main.js'
                    ]
                }
            }
        }


    });

    // load plugin
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // runt the task
    //grunt.registerTask('default', ['uglify', 'cssmin']);
    grunt.registerTask('default', ['cssmin']);




};