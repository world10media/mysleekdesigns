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
                    'css/phi_index.min.css': [
                        'css/plugins/bootstrap.min.css',
                        'css/responsive.css',
                        'css/style.css',
                        'css/custom.css'
                        //'css/fonts-lato.css'

                    ]
                }
            }
        },


            /*
        <!-- =========================
           STYLESHEETS
        ============================== -->
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="css/plugins/bootstrap.min.css">

        <!-- FONT ICONS -->
    <link rel="stylesheet" href="css/icons/iconfont.css">

        <!-- CUSTOM STYLESHEET -->
    <!--<link rel="stylesheet" href="css/style.css">-->
        <link rel="stylesheet" href="css/custom-form.css">
        <link rel="stylesheet" href="css/styles-form.css">

        <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="css/responsive.css">

        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,400italic,700,900' rel='stylesheet'
    type='text/css'>
            */

/*

        cssmin: {
            combine: {
                files: {
                    'css/phi_form.min.css': [
                        'css/plugins/bootstrap.min.css',
                        'css/icons/iconfont.css',
                        'css/custom-form.css',
                        'css/styles-form.css',
                        'css/responsive.css',
                        'css/fonts-lato.css'

                    ]
                }
            }
        },

*/


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