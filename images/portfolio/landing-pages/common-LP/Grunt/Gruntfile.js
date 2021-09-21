/**
 * Created by hm909 on 6/30/16.
 */


module.exports = function(grunt){

/*    grunt.registerTask("default", "", function () {
        grunt.log.write("asdasdasdasd");
    });*/

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        cssmin: {
            combine: {
                files: {
                    '../../americanhealthinsure.com/assets/css/ahi_index_v2.css': [
                        '../../americanhealthinsure.com/assets/css/plugins/bootstrap.min.css',
                        '../../americanhealthinsure.com/assets/css/responsive.css',
                        '../../americanhealthinsure.com/assets/css/style-v2.css',
                        '../../americanhealthinsure.com/assets/css/custom-v2.css',
                        '../../americanhealthinsure.com/assets/css/fonts-lato.css']
                }
            }
        },

        uglify: {
            dist: {
                files: {
                    'assets/js/ahi.min.js': ['assets/js/plugins/jquery1.11.2.min.js', 'assets/js/plugins/bootstrap.min.js',
                    'assets/js/plugins/jquery.easing.1.3.min.js', 'assets/js/main.js']
                }
            }
        }


    });

    // load plugin
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // runt the task
    grunt.registerTask('default', ['cssmin']);



};