echo "running composer";
composer dump-autoload;
composer install --working-dir=/app;

php-fpm --nodaemonize --fpm-config /usr/local/etc/php-fpm.d/default.conf;
