// Wrapper
module.exports = function(grunt) {
	'use strict';

	// Task configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		compass: {
			dist: {
				options: {
					sassDir: 'sass',
					cssDir: 'css'
				}
			}
		},
		watch: {
			compass: {
				files: ['sass/*.scss'],
				tasks: ['compass'],
				options: {
					livereload: true
				}
			},
			livereload: {
				files: ['./*.php', 'js/**/*.js'],
				options: {
					livereload: true
				}
			}
		}
	});

	// Plugin loading (one for all)
	require('load-grunt-tasks')(grunt);

	// Register tasks
	grunt.registerTask('default', ['watch']);
}