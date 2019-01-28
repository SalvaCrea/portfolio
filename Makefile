
dev: install-wp use-config-dev

use-config-dev: 
	cp config/dev-wp-config.php wordpress/wp-config.php

install-wp: 
	wget https://fr.wordpress.org/wordpress-5.0.3-fr_FR.zip -O wordpress.zip
	unzip wordpress.zip
	rm -R wordpress.zip
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -O wordpress/wp-cli.phar
	ln -s ./ wordpress/wp-content/themes/portfolio

install-extension: 
	cd wordpress && php wp-cli.phar plugin install elementor --activate

dev-server:
	cd wordpress && php -S localhost:8080