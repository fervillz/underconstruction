module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			options: {
				includePaths: ['sass']
			},
			dist: {
				options: {
					outputStyle: 'expanded',
					sourceMap: true,
					style: 'expanded',
				},
				files: {
					'style.css': 'sass/style.scss',
				}
			}
		},

		autoprefixer:{
			dist: {
				files: {
					'style.css': 'style.css',
				},
			},
		},

		watch: {
			grunt: {
				options: {
					reload: true
				},
				files: ['Gruntfile.js']
			},

			css: {
				files: 'sass/**/*.scss',
				tasks: ['sass', 'autoprefixer'],
			},
		}
	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');

	grunt.registerTask('default', ['css','watch']);
	grunt.registerTask('css', ['sass', 'autoprefixer']);
}
