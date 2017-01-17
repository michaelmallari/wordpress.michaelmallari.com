'use strict';
require('load-grunt-tasks')(grunt);


module.exports = function(grunt) {
	grunt.initConfig({
		php: {
			server: { // Start PHP Server
				options: {
					base: 'wordpress', // Project root
					env: {
						PHP_ENV: 'development'
					},
					hostname: '127.0.0.1',
					port: 8000
				}
			}
		}
	});


	grunt.registerTask('server', [
		'php:server' // Start PHP Server by typing 'grunt serve' in command line
	]);
};