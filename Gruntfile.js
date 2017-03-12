module.exports = function (grunt) {

    grunt.loadNpmTasks('grunt-contrib-watch'); // watch and execute tasks

    grunt.initConfig({
        // tasks
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            options: { livereload: true },
            php: {
                files: ['**/*.php']
            }
        }
    });

    grunt.registerTask('default', ['watch']); // npm run grunt

};
