run: stop
	@docker run -d --rm -p 8877:80 --name php-oop -v $(PWD):/var/www/html php:7.2-apache
	@docker ps --filter "name=php-oop"

stop:
	@-docker kill php-oop