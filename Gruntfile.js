grunt.initConfig({
	php: {
		test: { // Start PHP Server
			options: {
				base: 'wordpress', // Project root
				env: { },
				hostname: '127.0.0.1',
				keepalive: true,
				open: true,
                port: 8000
			}
		}
	}
});


grunt.registerTask('serve', [
	'php:test' // Start PHP Server by typing 'grunt serve' in command line
]);